<?php
  class Database 
  {
    private $host = HOTE;
    private $user = USER;
    private $pass = MDP;
    private $dbname = BD;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct()
    {
      //créer la chaîne de connexion
      $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
      $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );
      try
      {
        $this->dbh = new PDO($dsn, $this->user,$this->pass, $options);
        echo "Vous êtes connecter";
      }catch (PDOException $e)
      {
        $this->error = $e -> getMessage();
        echo $this->error;
      }
    }
    public function query($sql)
    {
      $this->stmt = $this->dbh->prepare($sql);
    }

    //Bind values 
    public function bind ($param, $value, $type = null)
    {
      if(is_null($type))
      {
        switch(true)
        {
          case is_int($value):
            $type = PDO::PARAM_INT;
            break;
          case is_bool($value):
            $type = PDO::PARAM_BOOL;
            break;
          case is_null($value):
            $type = PDO::PARAM_NULL;
            break;
          default:
            $type = PDO::PARAM_STR;
        }

      }
      $this->stmt->bindValue($param, $value, $type);
    }
    //Execute une requete preparée
    public function execute()
    {
      return $this->stmt->execute();
    }
    //Récupérer le resultat d'une requête dans un tableau 
    //objet 
    public function resultSet()
    {
      $this->execute();
      return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    //Lire un enregistrement comme un objet
    public function single()
    {
      $this->execute();
      return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    //Récupérer le nombre de ligne 
    public function rowCount()
    {
      return $this->stmt->rowCount();
    }
  }
?>