<?php

require './Revis1.php';

class GoViral extends Funny{
  private $viral;

  public function __construct($joke, $viral)
  {
    parent::__construct($joke);
    $this->viral = $viral;
  }

  public function get_viral_joke()
  {
    echo "$this->joke goes $this->viral";
  }
}

(new GoViral("This ino", "Viro joke"))->get_viral_joke();