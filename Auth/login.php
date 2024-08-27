<?php
include_once 'app/user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = new User();
  $user->email = $_POST['email'];
  $user->password = $_POST['password'];

  if ($user->login()) {
    echo "login successful";
  } else {
    echo "login failed";
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <h2> Login form</h2>
    <form action="login.php" method="POST">

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
      <button type="submit" class="btn btn-default">Login</button>
      <a href="reg.php" class="btn btn-default">Registration</a>
    </form>
  </div>

</body>

</html>