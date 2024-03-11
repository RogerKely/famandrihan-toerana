<?php

namespace App\Controller\Client;
use app\App;

class ClientController extends AppController
{
  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Client');

  }
  public function index()
  {
    $this->loadModel('TypeService');
    $this->loadModel('Service');
    $type = $this->TypeService->all();
    $service = $this->Service->lister();
    $this->render('service.index' , compact('service' , 'type'));
  }

  /**
   * Se connecter en tant que client 
   * 
   */
  public function connecter()
  {
    if(isset($_POST['nom_client']) && isset($_POST['mdp']))
    {
      $nomClient = $_POST['nom_client'];
      $mdp = $_POST['mdp'];
      $Client = $this->Client->query("
        SELECT
          * 
        FROM client
        WHERE nom_client = ?
      ", [$nomClient],true);
      if($Client)
      {
        if($Client->mdp === $mdp)
        {
          $connecter = "connecter";
          $_SESSION['authentification'] = $Client->id;
          $this->loadModel('TypeService');
          $this->loadModel('Service');
          $type = $this->TypeService->all();
          $service = $this->Service->lister();
          $this->render('service.index' , compact('service' , 'type'));
        }
        else
        {
          $connecter = "Mots de passe incorrect!!";
        }        
      }
      else
      {
        $connecter = "Nom d'utilisateur introuvable";
      }
    }

    $this->render('client.connecter', compact('connecter'));
  }
  public function login()
  {
    if (!empty($_POST))
    {
      $Img = $this->img();
      $resultat = $this->Client->create(  
        [
          'nom_client'      => $_POST['nom_client'], 
          'email_client'    => $_POST['email_client'] , 
          'contact_client'  => $_POST['contact_client'] , 
          'adresse_client'  => $_POST['adresse_client'],
          'mdp'             => $_POST['mdp']
        ]);
      
      if ($resultat)
      {
        return $this->index();
      }
    }
    
    $this->render('client.login');
  
  }

}