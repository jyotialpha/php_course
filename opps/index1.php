<?php

class Bike1
{
  public $name = 'hero'; //if i commented this i will get error bcz i need a constructor to pass parameters

  function getBikeName()
  {
    return $this->name;
  }
  function setBikeName($name)
  {
    $this->name = $name;
  }
}

$bike1 = new Bike1();
$bike1->setBikeName('Honda');

echo $bike1->getBikeName();
