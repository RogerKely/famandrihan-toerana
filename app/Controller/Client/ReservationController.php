<?php

namespace App\Controller\Client;


class ReservationController extends AppController
{
  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Reservation');
  }

  public function index()
  {

    $reservation = $this->Reservation->FindUserReservation($_GET['id']);
    $this->render('reservation.index' , compact('reservation'));
  }

  public function ajouter()
  {
    if (!empty($_POST))
    {
      $resultat = $this->Service->create(  
        [
          'nombre_reserver' => $_POST['nombre_reserver'], 
          'delait'          => $_POST['delait'] , 
          'id_service'      => $_GET['id'] , 
          'id_client'       => $_GET['id1']
        ]);
      
      if ($resultat)
      {
        echo "<div class='alert alert-success'>Entrer réussie</div>";
        return $this->index();
      }
      $this->loadModel('service');
      $service = $this->Service->ServiceFindById($_GET['id'],$_GET['id1']);
      $this->render('service.afficher.index' , compact('reservation'));
    }
  }
}