<?php 

//**Abstract class */

//**(1)An abstract class is a class that cant be instanciated on its won and is meant to be subclassed by other classes. */

//**(2)An abstract class can define abstract methods, which are methods that have no implimentation in the abstract class but are meant to be implimented in its subclasses. */

abstract class Car1{
  public function color(){
    return "Red<br>";
  }
  abstract public function drive();
}

class Bmw extends Car1{
  public function drive(){
    echo "Bmw is driving<br>";
    } 
}

// $c1 = new Car1(); //we cant instanciate abstract class
// echo $c1->color();

$c2 = new Bmw();
echo $c2->drive();
echo $c2->color();

//**Notes */
//**(1)An abstract class cannot be instantiated directly. it can only be instantiated by creating a subclass and instantiating that. */
//**(2)An abstract class can have both abstract and non-abstract methods. */
//**(3)An abstract method cannot have a body. it only has a signature, which specifies its name and parameters. */
//**(4)All subclasses of an abstract class must implimented all of its abstract methods,or else they will also be considered abstract.*/

?>