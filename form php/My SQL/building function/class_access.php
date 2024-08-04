<?php
class Car
{
  public $doors = 4;
  protected $hood = 4;
  private $engine = 1;
}
// thats what we called instance 
$porche = new Car();
$semi = new Semi();

class Semi extends car
{
  function showproperty()
  {

    echo $this->hood;
  }
}
echo $semi->showproperty();
