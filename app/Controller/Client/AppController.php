<?php

namespace App\Controller\Client;
use app\App;

class AppController extends \App\Controller\AppController
{
  public function __construct()
  {
    parent::__construct();
    if(!$this->Connected())
    {
      header("location:".URLROOT."/index.php?p=login.loginChoice");
    }
  }

  /**
   * Générateur automatique des modèles à utiliser
   */
  protected function loadModel($modelName)
  {
    $this->$modelName = App::getInstance()->getTable($modelName);
  }

  public function Connected()
  {
    return isset($_SESSION['authentification']);
  }
}