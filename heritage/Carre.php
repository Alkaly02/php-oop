<?php

class Carre extends Form{
  public $cote = 4;

  public function aire() {
    return $this->cote ** 2;
  }
}

?>