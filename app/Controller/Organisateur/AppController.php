<?php

namespace App\Controller\Organisateur;
use app\App;

class AppController extends \App\Controller\AppController
{
  public function __construct()
  {
    parent::__construct();
    
  } 
  public function Connected()
  {
    return isset($_SESSION['authentification']);
  }
}