<?php
require './Calcul.php';

// ! la class somme n'est pas obligee d'implementer toutes les methodes de la class abstraite (Calcul)

class Somme extends Calcul{
  private $number;

  public function operation()
  {
    return $this->number + $this->number;
  }
}