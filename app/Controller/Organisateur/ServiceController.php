<?php

namespace App\Controller\Organisateur;

class ServiceController extends AppController
{
  public $image_location = "service";
  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Service');
  }

  public function index()
  {
    $this->loadModel('TypeService');
    $type = $this->TypeService->all();
    $service = $this->Service->ServiceOrganisateurFindById($_GET['id']);
    $this->render('organisateur.service.index' , compact('service' , 'type'));
    
  }

  public function ajouter()
  {
    if (!empty($_POST))
    {
      $Img = $this->img();
      var_dump($Img);
      $resultat = $this->Service->create(
        [
          'id'              => 1,
          'intitule'        => $_POST['intitule'], 
          'prix'            => $_POST['prix'],
          'id_disponibiliter' => 1,
          'id_type'         => $_POST['id_type'],
          'id_organisateur' => 1,
          'localisation'     => $_POST['localisation'],
          'description'     => $_POST['description'] , 
          'image_service'   => $Img,
          'date_service'    => $_POST['date_service']
        ]);
      echo $resultat;
      if ($resultat)
      {
        return $this->index();
      }
    }
    $service = $this->Service->lister();
    $this->loadModel('TypeService');
    $type = $this->TypeService->all();
    $this->render('organisateur.service.edit' , compact("type","service"));
  }


  public function editer()
  {
    if (!empty($_POST))
    { 
      $Img = $this->img();
      var_dump($Img);
      $resultat = $this->Service->update(
        $_GET['id'], [
          'intitule'        => $_POST['intitule'], 
          'prix'            => $_POST['prix'],
          'id_organisateur' => $_GET['id'],
          'id_type'         => $_POST['id_type'],
          'localisation'     => $_POST['localisation'],
          'description'     => $_POST['description'] , 
          'image_service'   => $Img,
          'date_service'    => $_POST['date_service']
        ]);
    }
    $service = $this->Service->lister();
    $service2 = $this->Service->ServiceFindById($_GET['id']);
    $this->loadModel('TypeService');
    $type = $this->TypeService->all();
    $this->render('organisateur.service.editer' , compact("type","service" ,"service2"));
  }
}