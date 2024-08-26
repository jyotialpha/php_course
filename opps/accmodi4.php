<?php

// Access modifiers for methods determine the visibility and accessibility of the methods both inside and outside the class.
// 1. Public: Public methods are visible and accessible from anywhere, both inside and outside the class.
// 2. Protected: Protected methods are visible and accessible only within the class and its subclasses.
// 3. Private: Private methods are visible and accessible only within the class itself. 


class Teacher
{
  public $name; //we access from anywhere
  protected $age; //we access only from same class and subclass not out side the class
  private $subject; // we access only from same class 

  function __construct($name, $age, $subject)

  {
    $this->name = $name;
    $this->age = $age;
    $this->subject = $subject;
  }

  function getName()
  {
    return $this->name;
  }


  //lets see some methods using accessmodifiers

  public function m1()
  {
    echo "public method";
  }

  protected function m2()
  {
    echo "protected method";
  }
  private function m3()
  {
    echo "private method";
  }
}


$teacher1 = new Teacher("Rama", 21, "php");

echo $teacher1->name . "<br>";
// echo  $teacher1->age;  //error :- we cant acess protected data ouside of the class 
// echo $teacher1->subject; //eroor :-we cant acess private data ouside of the class 

//to access or add the data we should know impliment the gertter and setter method 

$teacher1->m1();
// $teacher1->m2(); //error :- we cant acess protected method ouside of the
// $teacher1->m3(); //error :- we cant acess private method ouside of the
