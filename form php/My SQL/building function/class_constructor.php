<?php
class Car
{
  var $doors = 4;
  var $wheels = 4;
  var $engine = 1;
  function __construct()
  {

    echo $this->wheels = 10;
  }
}
// thats what we called instance 
$porche = new Car();
$truck = new Car();
