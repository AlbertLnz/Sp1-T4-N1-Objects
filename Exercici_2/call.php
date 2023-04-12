<?php

  include_once 'Shape.php';
  include_once 'Triangle.php';
  include_once 'Rectangle.php';

  $triangle = new Triangle($_POST['baseTriangle'], $_POST['alturaTriangle']);
  $rectangle = new Rectangle($_POST['baseRectangle'], $_POST['alturaRectangle']);
  
  echo "L'àrea del triangle és: ".$triangle->area()." m2"."<br>";
  echo "L'àrea del rectangle és: ".$rectangle->area()." m2";

?>