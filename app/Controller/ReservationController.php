<?php

namespace App\Controller;

class ReservationController extends AppController
{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Reservation');
  }

  /**
   * @param Reservation
   */
  public function index()
  {
    $reservation = $this->Reservation->lister();
    $this->render('reservation.index' , compact('reservation'));
  }
}