<?php
define('APP_ROOT', __DIR__); //it defines the index path like  c:\xampp\htdocs\oop\Aythcopy

require_once(APP_ROOT . '/vendor/autoload.php'); //we dont need to write include we it autoload the file path


//** Autoloader for namespace classes
spl_autoload_register(function ($class) {
  $classFile = str_replace("\\", DIRECTORY_SEPARATOR, $class . '.php');

  $classPath = APP_ROOT.'/app/'.$classFile;

if(file_exists($classPath)){
  require_once($classPath);
}

});
 


session_start();


use App\Services\Route;
$route = new Route();

require_once(APP_ROOT.'/routes/route.php');

$route->handle();