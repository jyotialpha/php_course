<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    div {
      width: 100px;
      height: auto;
      padding: 10px;
    }
  </style>
</head>

<body>
  <form action="page2.php" method="post">
    <div>
      <input type="text" name="username" id="username">
      <label for="text">Username</label>
    </div>
    <div>
      <input type="password" name="userpassword" id="userpassword">
      <label for="password">Password</label>
    </div>
    <div>
      <input type="submit" name="submit" id="submit" value="submit" className="">
    </div>
  </form>
</body>

</html>