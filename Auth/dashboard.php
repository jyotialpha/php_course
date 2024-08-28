<?php
//** Include auth.php to ensure only logged-in users can access this page

include_once 'auth.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 pt-4">
      <h2>Welcome to the Dashboard, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>

        <a href="logout.php" class="btn btn-dark btn-sm">Logout</a>

      </div>

    </div>
  </div>

</body>

</html>