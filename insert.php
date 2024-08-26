<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <form action="insert.php" method="post">
    id:<input type="text" name="id" id="id">
    <br>
    Name <input type="text" name="name" id="name">
    <br>
    Salary <input type="text" name="salary" id="salary">
    <br>
    Age <input type="text" name="age" id="age">
    <br>
    <input type="submit" value="submit" name="submitbtn">
  </form>
  <?php
  if (isset($_POST['submitbtn'])) {

    $eid = $_POST['id'];
    $ename = $_POST['name'];
    $esal = $_POST['salary'];
    $eage = $_POST['age'];

    $con = mysqli_connect("localhost", "root", "", "emp", "3307");
    echo "Connected successfully";
    $sql = "insert into empdetails values(?,?,?,?)";
    $stmt = mysqli_prepare($con, $sql);
    $stmt->bind_param("isii", $eid, $ename, $esal, $eage);
    $stmt->execute();
    echo "record execute successfully";
  }
  ?>
</body>

</html>