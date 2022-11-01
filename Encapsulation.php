<?php

//! L'encapsulation est le fait de cacher le plus d'infos possible et de fournir une interface a l'utilisateur pour pouvoir acceder a des informations qui sont cachees

class Encapsulation {
  private $cookie;
  private $session;

  public function __construct(String $cookie, String $session)
  {
    $this->cookie = $cookie;
    $this->session = $session;
  }

  private function set_cookie($cookie){
    $this->cookie = $cookie;
    return $this->cookie;
  }

  public function get_cookie($cookie){
    return $this->set_cookie($cookie);
  }
}

$cookie = new Encapsulation(5, "session");

echo $cookie->get_cookie("cookie2");


?>