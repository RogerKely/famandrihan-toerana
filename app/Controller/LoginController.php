<?php

namespace App\Controller;

class LoginController extends AppController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function loginChoice()
  {
    $this->render('loginChoix');
  }
  public function deconnecter()
  {
    unset($_SESSION['authentification']);
    $this->render('loginChoix');
  }
  public function Connected()
  {
    return isset($_SESSION['authentification']);
  }
}