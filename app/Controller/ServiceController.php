<?php

namespace App\Controller;

class ServiceController extends AppController
{
  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Service');
  }

  /**
   * @param service
   */
  public function index()
  {
    $this->loadModel('TypeService');
    $type = $this->TypeService->all();
    $service = $this->Service->lister();
    $this->render('service.index' , compact('service' , 'type'));
  }

  public function type()
  {
    $this->loadModel('TypeService');
    $type = $this->TypeService->all();
    $service = $this->Service->ServiceFindByType($_GET['id']);
    $this->render('service.index' , compact('service' , 'type'));
  }

  public function acceuil()
  {
    $this->loadModel('TypeService');
    $this->loadModel('Organisateur');
    $org = $this->Organisateur->all();
    $type = $this->TypeService->all();
    $service = $this->Service->lister();
    $this->render('service.acceuil' , compact('service' , 'type' , 'org'));
  }
  
  public function afficher()
  {
    $service = $this->Service->ServiceFindById($_GET['id']);
    $this->render('service.afficher' , compact('service'));
  }
}