<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $con = mysqli_connect("localhost", "root", "", "emp", "3307");
  echo "Connected successfully <br>";

  $sql = "select * from  empdetails";
  $record =  $con->query($sql);
  $n = mysqli_num_rows($record);
  // echo "Number of rows: $n";
  if($n>0){
    while($row=mysqli_fetch_row($record)){ //also there is another method like  mysqli_fetch_accoc() where we use $row[eid].''.$row[ename].'' etc...
      echo $row[0].''.$row[1].''.$row[2].''.$row[3].'';
      echo "<br>";
    }

  }else{
    echo "No records found";
  }






  ?>
</body>

</html>