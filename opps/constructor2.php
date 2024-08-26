<?php


// we use constructor at the class when object is crested then the constructor will call we can pass argument at 
// oonject level  also .
class Bike
{
  //data
  private $name;

  //constructor
  function __construct($name)
  {
    $this->name = $name;
  }

  //getter and setter

  function getName()
  {
    return $this->name;
  }
  function setName($name)
  {
    $this->name = $name;
  }
}

$bike1 = new Bike("Honda");
$bike1->setName("Hero");
echo $bike1->getName();
