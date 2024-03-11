<?php
namespace App;

class Database
{
  private $db_name;
  private $db_user;
  private $db_host;
  private $db_pass;
  private $db;

  public function __construct()
  {
    $this->db_name = DB_NAME;
    $this->db_user = DB_USER;
    $this->db_host = DB_HOST;
    $this->db_pass = DB_PASS;
  }

  public function getDB()
  {
    if ($this->db === null)
    {
      $db =new \PDO('mysql:dbname='.$this->db_name.';host='.$this->db_host.'', '' . $this->db_user , ''.$this->db_pass.'');
      $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      $this->db= $db;
    }

    return $this->db;
  }

  /**
   * Redefinition du methode query avec certaine parametre
   * @param stmt string
   * @param class PDOStatement
   * @param one boolean
   * 
   * @return un tableau ou bien une seule résultat
   */
  public function query($stmt , $class =null ,$one= false)
  {
    $req = $this->getDB()->query($stmt);
    if($class === null )
    {
      $req->setFetchMode(\PDO::FETCH_OBJ);    
    }
    else
    {
      $req->setFetchMode(\PDO::FETCH_CLASS, $class);    
    }
    
    if($one)
    {
      $data = $req->fetch();
    }
    else
    {
      $data = $req->fetchAll();
    }
    return $data;
  }

  /**
   * @param stmt String
   * @param class 
   * @param one
   * @return 
   */

  public function prepare($stmt , $attribut , $class= null , $one = false)
  {
    var_dump($stmt, $attribut);
    $req = $this->getDB()->prepare($stmt);
    $res = $req->execute($attribut);
    if (
      strpos($stmt, 'UPDATE') === 0 ||
      strpos($stmt, 'INSERT') === 0 ||
      strpos($stmt, 'DELETE') === 0 
    )
    {
      return $res;
    }

    if($class === null )
    {
      $req->setFetchMode(\PDO::FETCH_OBJ);    
    }
    else
    {
      $req->setFetchMode(\PDO::FETCH_CLASS, $class);    
    }
    if($one === true)
    {
      $data = $req->fetch();
    }
    else
    {
      $data =$req->fetchAll();
    }
    return $data;
  }
}