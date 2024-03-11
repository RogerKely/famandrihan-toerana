<?php

namespace App\Entity;

class TypeServiceEntity extends Entity
{
  public function getUrl()
  {
    return 'index.php?p=service.show&id='.$this->id;
  }
}