<?php

namespace App\Controller;
use app\App;

class AppController extends Controller
{
  protected $template = 'Template_header';

  public function __construct()
  {
    $this->viewPath = ROOT . '/app/views/';
  }

  /**
   * Générateur automatique des modèles à utiliser
   */
  protected function loadModel($modelName)
  {
    $this->$modelName = App::getInstance()->getTable($modelName);
  }

  protected function img()
  {
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0)
    {
      if($_FILES['image']['size'] < 3000000)
      {
        $informationImage = pathinfo($_FILES['image']['name']);
        $imageExtension = $informationImage['extension'];
        $extensionTableau = array('png', 'jpeg', 'jpg');
        if (in_array($imageExtension,$extensionTableau))
        {
          $nomImage = "IMAGE/".time().rand().'.'.$imageExtension;
          move_uploaded_file($_FILES['image']['tmp_name'], $nomImage );
          return $nomImage;
        }
      }
    }
  }
  public function Connected()
  {
    return isset($_SESSION['authentification']);
  }
}