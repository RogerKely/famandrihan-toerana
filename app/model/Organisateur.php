<?php
class Organisateur
{
  private $db;
  public function __condtruct()
  {
    $this->db = new Database();
  }

  public function ajouter($data)
  {
    $this->db->query('INSERT INTO Organisateur (nom_organisteur , email_organisateur, entreprise , numero_cin, mdp_organisateur) VALUES(:nom, :email, :entreprise, :numero , mdp)');
    $this->db->bind (':nom', $data['nom']);
    $this->db->bind (':email', $data['email']);
    $this->db->bind (':entreprise', $data['entreprise']);
    $this->db->bind (':numero', $data['numero']);
    $this->db->bind (':mdp', $data['mdp']);

    if($this->db->execute())
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function deleteOrganisateur($id)
  {
    $this->db->query('DELETE FROM Rrganisateur WHERE id_organisateur = :id');
    $this->db->bind (':id', $id);

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