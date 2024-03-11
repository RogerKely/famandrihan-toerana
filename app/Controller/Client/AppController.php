<?php

namespace App\Controller\Client;
use app\App;

class AppController extends \App\Controller\AppController
{
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Générateur automatique des modèles à utiliser
   */
  protected function loadModel($modelName)
  {
    $this->$modelName = App::getInstance()->getTable($modelName);
  }

}