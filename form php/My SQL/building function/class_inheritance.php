<?php
class Car
{
  var $doors = 4;
  var $wheels = 4;
  var $engine = 1;
  function Movewheels()
  {

    echo "wheelsmove";
  }
}
// thats what we called instance 
$porche = new Car();

class Plane extends car
{
}
$Boieng777 = new Plane();

echo $Boieng777->wheels;
// if (class_exists("Plane")) {
//   echo "working";
// }
