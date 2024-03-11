<?php

namespace App\Entity;

class ClientEntity extends Entity
{
  public function getUrl()
  {
    return 'index.php?p=users.show&id='.$this->id;
  }
}