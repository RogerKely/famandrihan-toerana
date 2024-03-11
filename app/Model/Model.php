<?php

namespace App\Model;

class Model
{
  protected $nomModel;
  protected $db;

  public function __construct(\App\Database $db)
  {
    $this->db = $db;

  } 
  /**
   * Une fonction qui recupère tout les lignes dans la table 
   */
  public function all()
  {
    return $this->query("SELECT * FROM " . strtolower($this->nomModel));
  }

  public function query($stmt, $attribut = null , $one = false)
  {
    if ($attribut === null)
    {
      return $this->db->query(
        $stmt,
        str_replace("Model" , "Entity" , get_class($this)),
        $one
      );
    }
    else
    {
      return $this->db->prepare(
        $stmt, 
        $attribut, 
        str_replace('Model', "Entity", get_class($this)), 
        $one
      );
    }
  }

  public function find ($id)
  {
    return $this->query("
    SELECT * FROM {$this->nomModel}
    WHERE id=?
    ", [$id], true);
  }

  public function update ($id , $fields)
  {
    $sql_parts = [];
    $attributes = [];
    foreach($fields as $k => $v)
    {
      $sql_parts[] = "$k = ?";
      $attributes[] = $v;
    }
    $attributes [] = $id;
    $sql_parts = implode(', ' , $sql_parts);
    $nom = strtolower($this->nomModel);
    return $this->query("
    UPDATE $nom
    SET {$sql_parts}
    WHERE id=?
    ", $attributes, true);
  }


  public function create ($requete)
  {
    $sql = [];
    $sql_parts = [];
    $attribut = [];
    foreach($requete as $k => $v)
    {
      $sql[] = $k;
      $sql_parts[] = "$k = ?";
      $attribut[] = $v;
    }
    $nom = strtolower($this->nomModel);
    $sql_parts = implode(', ' , $sql_parts);
    $sql = implode(', ', $sql);


    return $this->query("
    INSERT INTO $nom ($sql)
    VALUES ($sql_parts)
    ", $attribut, true);
  }

  public function extract ($key, $value)
  {
    $records = $this->all();
    $return = [];
    foreach($records as $v)
    {
      $return [$v->$key = $v->$value];
    }
  }
}