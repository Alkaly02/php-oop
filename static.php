<?php

class Chair {

  public static $color = 'lome';

  public function __construct($color)
  {
    static::$color = $color;
  }

  public static function set_color($color){
    static::$color = $color;
    return static::$color;
  }

  public static function get_color(){
    return static::set_color('red');
  }


}

echo Chair::get_color();


?>