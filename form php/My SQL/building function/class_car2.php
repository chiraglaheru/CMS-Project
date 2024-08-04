<?php
class Car
{
  function Movewheels()
  {

    echo "wheelsmove";
  }
}

if (method_exists("Car", "movewheels")) {
  echo "the method id working";
} else {
  echo "nah";
}
