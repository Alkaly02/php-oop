<?php

class Person {

  public $first_name;
  public $last_name;
  public $age;

  public function __construct($first_name, $last_name, $age) {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->age = $age;
  }

  public function get_person(){

    return $this;
  }

  public function get_full_info(){

    return "You are $this->first_name $this->last_name and you are $this->age";
  }

  public function set_name($name){
    $this->first_name = $name;
  }

  
}

$alkaly = new Person("ALkaly", "BADJI", 20);

$alkaly->set_name("Kaba");

$person = $alkaly->get_person();

echo $alkaly->get_full_info();

// print_r($person);


?>