<?php

namespace App\Entity;

class OrganisateurEntity extends Entity
{
  public function getUrl()
  {
    return 'index.php?p=users.show&id='.$this->id;
  }
}