<?php
require_once '../Core/Core.php';
require_once '../Config/config.php';
define('ROOT',dirname(__DIR__));
require  ROOT.'/app/App.php';
use Core\Core;

app\App::load();

if(isset($_GET['p']))
{
  $p = $_GET['p'];
}
else
{
  $p = 'service.acceuil';
}


$p = explode('.',$p);
if ($p[0]== 'organisateur')
{
  $controller = '\App\Controller\Organisateur\\'.ucfirst($p[1]) . 'Controller';
  $action = $p[2];
}elseif ($p[0]== 'client')
{
  if($p[1]=== 'loginChoice')
  {
    $controller = '\App\Controller\Client\\'.ucfirst($p[0]) . 'Controller';
    $action = $p[1];
  }
  elseif($p[1]=== 'connecter'){
      $controller = '\App\Controller\Client\\'.ucfirst($p[0]) . 'Controller';
      $action = $p[1];
  }
  else{
    $controller = '\App\Controller\Client\\'.ucfirst($p[1]) . 'Controller';
    $action = $p[2];
  }
}
else{
  $controller = '\App\Controller\\'.ucfirst($p[0]) . 'Controller';
  $action = $p[1];
}
  $controller = new $controller();
  $controller->$action();