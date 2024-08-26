<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $name = $_POST['username'];
  $pass = $_POST['userpassword'];
  echo "user name is :" . $name.'<br>';
  echo "user name is :" . $pass;
  ?>
</body>

</html>