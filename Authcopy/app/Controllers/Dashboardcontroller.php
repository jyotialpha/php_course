<?php

namespace App\Controllers;

class DashboardController
{
  public function index()
  {
    require_once('app/pages/dashboard.php');
  }

  public function logout()
  {

    // session_start();
    $_SESSION = [];

    session_destroy();
    // header("Location: login.php");
    redirect('login');
    exit();
  }
}
