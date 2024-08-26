<?php
//**Insted of including we use composer below */
// include('app/database/databaseconnect.php');
// include('app/database/testing.php');
// include ('app/config/index.php');


//**use Composer */
require_once'vendor/autoload.php';


///**we can use like this  */
// use app\database\Dbconnection;
// use app\database\Testing;

//**Or we can use like this */
use app\user\User as User;
use app\config\Mail as ConfigMail;
use app\database\{
  Dbconnection as Dbconnection,
  Testing as Testing
};


class Post
{
  public function __construct($title)
  {
    echo $title;
  }
}

new Post('Post title index page <br>');
new Dbconnection;
new Testing;
new ConfigMail;
new User;
