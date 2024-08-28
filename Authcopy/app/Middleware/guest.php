<?php
session_start(); 

//**Debugging - Check if session is set
// if (isset($_SESSION['user_id'])) {
//   echo "User ID is set: " . $_SESSION['user_id'];
// } else {
//   echo "User ID is not set.";
// }

// Check if the session variable for user ID is not set
if (isset($_SESSION['user_id'])) {
  // If the session is not set, redirect the dashboard to the login page
  header("Location: dashboard.php");
  exit();
}
