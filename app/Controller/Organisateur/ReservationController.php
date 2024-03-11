<?php

namespace App\Controller\Organisateur;

class ReservationController extends AppController
{
  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Service');
  }
  
  public function index()
  {
    
  }
}