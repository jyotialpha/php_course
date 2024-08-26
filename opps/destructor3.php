<?php

//points to be remember
//1)Objects hold system resources or large amount of memory that need to be released when the object is destroyed.
//2)Onjects need to perform cleanup actions when they are no longer needed.
//3)Objects need to be properly released to prevent memory leaks.
//4)objects may be destroyed unexpectedly and need to clean up any resourses they hold.
//5)objects need to maintain a consistant state or perform certain actions when they are destroyed.


class Bike
{
  private $name;

  function __construct($name)

  {
    $this->name = $name;
    echo "i am constructor.<br>";
  }

  function getName()
  {
    return $this->name;
  }

  function __destruct()
  {
    echo "i am destructor .<br>";
  }
}

//object
$bike1 = new Bike("honda");
echo "Hye i am object .<br>";
echo $bike1->getName();
