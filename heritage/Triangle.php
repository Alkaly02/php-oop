<?php

class Triangle extends Form{

  public $base = 5;
  public $hauteur = 10;

  public function aire() {
    return ($this->base * $this->hauteur) / 2;
  }

}


?>