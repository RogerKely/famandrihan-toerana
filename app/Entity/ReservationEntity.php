<?php

namespace App\Entity;

class ReservationEntity extends Entity
{
  public function getUrl()
  {
    return 'index.php?p=reservation.show&id='.$this->id;
  }

  public function getExtrait()
  {
    $html = '<p>' . substr($this->contenus,0,50) . "...</p>";
    $html .= '<p><a href="'. $this->getURL() . '" class="btn bg-warning text-dark">Voir la suite</a></p>';
    return $html;
  }
}