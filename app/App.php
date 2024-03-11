<?php
namespace App;

use App\Database;

class App
{
  public $title = "Mon site ";

  private static $_instance;
  private $db_instance;

  public static function getInstance()
  {
    if (is_null(self::$_instance))
    {
      self::$_instance = new App();
    }
  return self::$_instance;
  }

  public function getTable($name)
  {
    $class_name = 'App\Model\\' . ucfirst($name) . 'Model';
    return new $class_name($this->getDatabase());
  }


  public function getDatabase()
  {
    if (is_null($this->db_instance))
    {
          return new Database();
    }
    return $this->db_instance;
  }

  public function forbidden()
  {
    header('HTTP/1.0 403 Forbidden');
    die('Acces Interdit');
  }

  public function notFound()
  {
    header('HTTP/1.0 404 not Found');
    die ('Page introuvable');
  }
  public static function load()
  {
    session_start();
    require ROOT . '/app/Requires.php';
    Requires::loader();
  }
}

?>