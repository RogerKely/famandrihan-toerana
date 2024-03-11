<?php
namespace App\Model;

class ServiceModel extends Model
{
  protected $nomModel = "Service";

  public function lister()
  {
    return $this->query("
      SELECT 
        service.id, 
        service.intitule, 
        service.prix,
        service.image_service,
        service.description,
        service.id_organisateur,
        service.id_type,
        service.image_service as img,
        organisateur.nom_organisateur as organisateur,
        typeservice.nom_type
      FROM service
      LEFT JOIN organisateur ON service.id_organisateur = organisateur.id
      LEFT JOIN typeservice ON service.id_type = typeservice.id
    ");  
  }

  public function ServiceFindById($id)
  {
    return $this->query("
      SELECT
        service.id, 
        service.intitule, 
        service.prix,
        service.image_service,
        service.localisation,
        service.description,
        service.id_organisateur,
        service.date_service,
        service.id_type,
        organisateur.nom_organisateur as organisateur
      FROM service
      LEFT JOIN organisateur ON service.id_organisateur = organisateur.id
      LEFT JOIN typeservice ON service.id_type = typeservice.id
      WHERE service.id = ?
      ", 
      [$id], 
      true
    );
  }

  public function ServiceOrganisateurFindById($id)
  {
    return $this->query("
      SELECT
        service.id, 
        service.intitule, 
        service.prix,
        service.image_service,
        service.localisation,
        service.description,
        service.image_service as img,
        service.date_service as date,
        organisateur.nom_organisateur as organisateur

      FROM service
      RIGHT JOIN organisateur ON service.id_organisateur = organisateur.id
      WHERE service.id_organisateur = ?
      ", 
      [$id],
    );
  }

  public function ServiceFindByType($id)
  {
    return $this->query("
      SELECT
        service.id, 
        service.intitule, 
        service.prix,
        service.image_service,
        service.description,
        service.id_organisateur,
        service.id_type,
        service.date_service as date,
        service.image_service as img,
        organisateur.nom_organisateur as organisateur
      FROM service
      LEFT JOIN organisateur ON service.id_organisateur = organisateur.id
      LEFT JOIN typeservice ON service.id_type = typeservice.id
      WHERE typeservice.id = ?
      ", 
      [$id]
    );
  }
}