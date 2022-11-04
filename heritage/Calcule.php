<?php

require './Carre.php';
require './Triangle.php';

echo 'Air du carre: '.(new Carre)->aire().'<br> Air du triangle: '.(new Triangle)->aire();

?>