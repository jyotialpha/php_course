<?php
//**Traits */

//**1.Traits are a way to reuse code across classes without inheritance. */
//**2.A trait is a group of methods that you can include within another class. it's a way to extract common functionality from classes that share similar behaviour and to avoid duplicating code .
//**3.when you use a trait, you can access its methods just as if they were define with in the class itself.

//**Benefits of using traits */
//*1.)Separation of concerns 
//*2.)Avoid code duplication
//*3.)Easier to maintain and modify code
//*4)flexibility 
//*5)redability



trait logger
{
  public function log($message)
  {
    echo $message . "\n";
  }
}

trait logger1{
  public $value = 10;
  public function log1($message)
  {
    echo $message . "\n";
    }
}
class Post
{
  use logger;
  public function store() {
    $this->log('Post created<br>');
  }
}


class post1{
  use logger,logger1;

  public function store1(){
    $this->log('Post created by log<br>');
    $this->log1('Post created by log1<br>');
    echo "value of log1".$this->value;
  }


}



$post = new Post();
$post->store(); // Outputs: Post created


$post1 = new post1();
$post1->store1();// Outputs: Post created by log
// Outputs: Post created by log1
// outputs: value of log1 10.



