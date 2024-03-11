<?php
class Client
{
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function register($data)
  {
    $this->db->query('INSERT INTO Client(nom_client, email_client , contact_client,adresse_client,mdp) VALUES (:nom, :email, :contact, :adresse, :mdp');
    $this->db->bind('nom:', $data['nom']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':contact', $data['contact']);
    $this->db->bind(':adresse', $data['adresse']);
    $this->db->bind(':mdp', $data['mdp']);

    if($this->db->execute())
    {
      return true;
    }
    else
    {
      return false;
    }
    
  }
}