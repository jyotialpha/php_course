<?php 
namespace app\user;
use app\database\Dbconnection;

class User extends Dbconnection {
  public function __construct()
  {
    echo "Hye i am user constructor";
  }

}