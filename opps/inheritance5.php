<?php
class Car
{
  public $name;
  protected $color;
  private $model;

  function __construct($name, $color, $model)

  {
    $this->name = $name;
    $this->color = $color;
    $this->model = $model;
  }

  function details()
  {
    return "Name: $this->name, Color: $this->color, Model: $this->model ,Speed: $this->speed";
  }

  function performence()
  {
    echo "good <br>";
  }
}

class Veicle extends Car
{
  public $speed;

  function __construct($name, $color, $model, $speed)
  {
    $this->name = $name;
    $this->color = $color;
    $this->model = $model; //model is private so we can get the value
    $this->speed = $speed;
  }


  //override the method
  function performence()
  {
    echo "best<br>";
  }
}

//created objrct of vechicle class which extends car class
$v1 = new Veicle("tesla", "red", "tesla-x", "20.33km/h");
echo $v1->details() . "<br>";


//call override methods

$c1 = new Car("tesla", "red", "tesla-x");
$c1->performence();

$v2 = new Veicle("tesla", "red", "tesla-x", "20.33km/h");
$v2->performence();




// ****************************************************************************/
// ***Final Keyword*//
//**we use final key word in class and method also where in case of class we cant extend the class and in case method we cant override the method.*/

 class Teacher{
  public $name;
  public $age;

  function __construct( $name, $age )

  {
    $this->name = $name;
    $this->age = $age;
  }

   function details(){
    echo "Teacher name is $this->name and age is $this->age<br>";
  }

  final function m1(){
    echo "i am a final function";
  }
}

//also we cant extend the final class
// class Education extends Teacher{

//   // we cant override the final method 
//   // function m1(){
//   //   echo "i am a final function";
//   // }
  
// }
