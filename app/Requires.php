<?php
namespace App;

/**
 * Cette classe a été conçu à fin de généré automatiquement l'appel des classes dans tout le programme
 * 
 */
class Requires
{
  public static function loader()
  {
    spl_autoload_register(array(__CLASS__ , 'autoloader'));
  }
  public static function autoloader($class)
  {
    if( strpos($class, __NAMESPACE__.'\\') === 0)
    {
      $class = str_replace(__NAMESPACE__ . '\\' , '' ,$class );
      $class = str_replace('\\', '/', $class);
      require __DIR__.'/'.$class.'.php';
    }
  }
}