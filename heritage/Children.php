<?php

require './Parent.php';

class Children extends Big_Parent {
    public function get_children_weight(){
      return $this->get_weight();
    }
}

// $poids = new Children();

echo (new Children())->get_children_weight().'<br>';
