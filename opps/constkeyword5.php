<?php 
 
class Demo{
  const pi =3.141;


  //we can use by self in method so that we can access by creating object
  function getpiValue(){
    echo "Access by using function:-".self::pi."<br>";
  }

}

//here we can access by creating object of that class
$d1 = new Demo();
$d1->getpiValue();

//we can also access outside class like below
echo "Access by using className outside:-".Demo::pi;

?>