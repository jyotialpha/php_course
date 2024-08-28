<?php
include_once 'guest.php';
include_once 'app/user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <h2> Registration form</h2>
    <form action="reg.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
      </div>
      <button type="submit" class="btn btn-default">Save</button>
      <a href="login.php" class="btn btn-default">Login</a>
    </form>
  </div>

</body>

</html>