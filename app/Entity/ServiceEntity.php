<?php

namespace App\Entity;

class ServiceEntity extends Entity
{
  public function getUrl()
  {
    return '?p=service.afficher&id='.$this->id;
  }

  public function getExtrait()
  {
    $html = '<p>' . substr($this->description,0,50) . "...</p>";
    return $html;
  }
}