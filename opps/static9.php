<?php 

class Test{
  public function m1(){
    echo "Method 1";
  }
  public static function m2(){
    echo "Method 2";
    }

  public static function m3(){
    echo "Method 3 ".self::m2();
  }
}


class Test1 extends Test{
  public static function m(){
    echo "Method 1 in Test1";
    parent::m2();
    self::m3();
    }

}

//**we create object to access the method
// $t1 = new Test();
// $t1->m1(); // Output: Method 1

//**but we can directly access if the method is static.

// echo Test::m2();
// echo Test::m3(); // Output: Method 2Method 3 Method 2

echo Test1::m();


//**USE OF FINAL KEYWORD IN CLASS AND MEETHOD */
//**Ehen we use final keyword in class we caant extend it and when the method is fibal we cant override the method */

class Bus{
  public final function display(){
    echo "This is a bus";
    }
  
}

class Bus1 extends Bus{
  // public function display(){//**cant override the final method
  //   echo "This is a bus1";
  // }
}


 final class  C1{
  public function m(){
    echo "This is a class C1";
    }
}


//**Fatal error: Class C2 cannot extend final class C1 in C:\xampp\htdocs\php_course\opps\static9.php on line 61 */
// class C2 extends C1{
//   public function m(){
//     echo "This is a class C2";
//   }
// }




?>