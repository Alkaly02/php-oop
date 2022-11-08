<?php 
include './Person.php';

class Officier extends Person {

  private $grade;

  public function __construct($first_name, $last_name, $age,$grade)
  {
    parent::__construct($first_name, $last_name, $age);
    $this->grade = $grade;
  }

}

 print_r(new Officier("ALkaly", "BADJI", 20, "Senior"));