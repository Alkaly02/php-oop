<?php 

/*
  @param mixed $joke
*/

class Funny {
  protected $joke;
  public function __construct($joke)
  {
    $this->joke = $joke;
  }

  public function get_joke() 
  {
    echo "$this->joke is so funny";
  }
}

// (new Funny("Go funny"))->get_joke();