<?php

namespace App\Model;

class ReservationModel extends Model
{
  protected $nomModel = 'Reservation';

  public function lister()
  {
    return $this->query("
      SELECT 
        reservation.id, 
        reservation.nombre_reserver, 
        reservation.date_reservation, 
        client.nom_client as clients,
        service.intitule as services
      FROM reservation
      LEFT JOIN client ON reservation.id_client = client.id
      LEFT JOIN service ON reservation.id_service = service.id
      ORDER BY reservation.date_reservation DESC
    ");
  }

  public function FindUserReservation($id)
  {
    return $this->query("
      SELECT 
        reservation.id, 
        reservation.nombre_reserver, 
        reservation.date_reservation, 
        client.nom_client as clients,
        service.intitule as services,
        service.description as des,
        service.image_service as img
      FROM reservation
      RIGHT JOIN client ON reservation.id_client = client.id
      RIGHT JOIN service ON reservation.id_service = service.id
      WHERE reservation.id=?
      ORDER BY reservation.date_reservation DESC
    ", [$id]);
  }
}