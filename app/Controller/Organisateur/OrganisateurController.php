<?php

namespace App\Controller\Organisateur;


class OrganisateurController extends AppController
{
  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Organisateur');
  }

  public function connecter()
  {
    if(isset($_POST['nom']) && isset($_POST['mdp']))
    {
      $nomOrganisateur = $_POST['nom'];
      $mdp = $_POST['mdp'];
      $Organisateur = $this->Organisateur->query("
        SELECT
          * 
        FROM organisateur
        WHERE nom_organisateur = ?
      ", [$nomOrganisateur],true);
      if($Organisateur)
      {
        if($Organisateur->mdp_organisateur === $mdp)
        {
          $connecter = "connecter";
          $_SESSION['authentification'] = $Organisateur->id;
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
    $this->render('organisateur.connecter', compact('connecter'));
  }
  public function login()
  {
    if (!empty($_POST))
    {
      $Img = $this->img();
      $resultat = $this->Organisateur->create(  
        [
          'nom_organisateur'      => $_POST['nom_organisateur'], 
          'email_organisateur'    => $_POST['email_organisateur'] , 
          'mdp_organisateur'      => $_POST['mdp_organisateur'],
          'image_organisateur'  => $_POST['image_organisateur'] 

        ]);
      
      if ($resultat)
      {
        return $this->index();
      }
    }
    
    $this->render('organisateur.login');
  
  }
}