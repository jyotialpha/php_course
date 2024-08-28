<?php

namespace App\Controllers;

use App\Models\User;

class RegController
{
  public function index()
  {
    require_once('app/pages/reg.php');
  }

public function register(){
  $user = new User();
  $user->email = $_POST['email'];
  $user->password = $_POST['password'];
  $user->name = $_POST['name'];

  if ($user->register()) {
    echo "Registration successful";
  } else {
    echo "Registration failed";
  }
}


}
