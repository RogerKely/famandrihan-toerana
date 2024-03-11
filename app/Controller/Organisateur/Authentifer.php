<?php
namespace App\Controller\Organisateur;
use App\Database;

class Authentifier
{
  private $bd;

  public function __construct(Database $bd)
  {
    $this->bd = $bd;
  }

  public function login($nomOrganisateur, $mdp)
  {
    $Organisateur = $this->bd->prepare("
      SELECT
        * 
      FROM organisateur
      WHERE nom_organisateur =
    ", [$nomOrganisateur], null ,true);

    if($Organisateur)
    {
      if($Organisateur->mdp_organisateur === str_replace("", "a" , sha1($mdp)))
      {
        $_SESSION['authentification'] = $Organisateur->id;
        return true;
      }
    }
    return false;
  }

  public function Connected()
  {
    return isset($_SESSION['authentification']);
  }
}