<?php
//**Interface */
interface CarInterface
{
  public function startEng();
  public function stopEng();
}

//**Jyoti class implimented interface */
class Jyoti implements CarInterface
{
  public function startEng()
  {
    echo "Start by jyoti<br>";
  }
  public function stopEng()
  {
    echo "Stop by jyoti<br>";
  }
}

//**Gyana class implimented interface */
class Gyana implements CarInterface
{
  public function startEng()
  {
    echo "Start by gyana<br>";
  }
  public function stopEng()
  {
    echo "Stop by gyana<br>";
  }
}


function driveCar(CarInterface $car)
{
  $car->startEng();
  $car->stopEng();
}

$jyoti = new Jyoti();
$gyana = new Gyana();

// driveCar($jyoti);
// driveCar($gyana);


/**Realtime Example */

//**Interface */
//*************************** */
interface PaymentProcessorInterface
{
  public function processPayment($amount);
}
//************************** */
//**Class */
//********************* */
class PayPal implements PaymentProcessorInterface
{
  public function processPayment($amount)
  {
    echo "Paypal payment of $amount processed<br>";
  }
}
class Stripe implements PaymentProcessorInterface
{
  public function processPayment($amount)
  {
    echo "Stripe payment of $amount processed<br>";
  }
}
//************************************ */
//**Usage */
//******************* */
class PaymentProcessor
{
  public function processPayment(PaymentProcessorInterface $processor, $amount)
  {
    $processor->processPayment($amount);
  }
}

//****************** */
//** create object and call */
//******************* */
$paypal = new PayPal();
$stripe = new Stripe();
$processor = new PaymentProcessor();
$processor->processPayment($paypal, 1000);

$processor->processPayment($stripe, 2000);


//**Interface Thought Process */
//**1.Identity common behaviors
//**2. Define the interface
//**3. Implement the interface in the class
//**4. Use the interface in the class
//**5. update the interface as needed


//**Uses in reallife */
//**1. Database connection
//**2. File upload
//**3. Payment gateway
//**4. Api integration 
//**5. Authentication


//**Note */
//**The use of interface to allow objects of different classes to be used interchangeably is often referred to as "polymorphism".

//** In opp polymorphism is the ability of objects of different classess to be treated as if they are the same type.  */

//**When a class impliments sn interface ,it's able to "morph" into that interface, which means it can be treated as if it's any other class that impliments the same interface. */

//**Interface vs Abstract classess */

//**. Interface cannot have properties,while abstract classes can
//**. Interface cannot have methods with implementations, while abstract classes can
//**All interface methods must be public, while abstract class methods are public or protected.

//**All methods in an interface are abstract, so they cannot be implimented in code and the abstract keyword is not necessary.