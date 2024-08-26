<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<marquee>This is my php code</marquee>
<center>
  <?php 
    echo " <font color = red size = 5>  welcome php  </font>";
    echo "<br>This is my php certification course ";
$a = 10;
$b = 20;
$c  = $a+$b;
echo "<br> sum of .$a.and .$b. is = .$c";

      // Datatype
 
      $aa = 12; //int
      echo $aa.'<br>';

      $bb = 12.23;//float
      echo $bb.'<br>';

      $cc = false ;// boolean
      echo $cc.'<br>';

      $dd = null;
      echo $dd.'<br>';

      $ar = array(1,2,3);
      print_r($ar);

// Constant
define('pi',3.141);
echo pi.'<br>';


// map function 

function cheack($ar){
  if($ar%2 == 0){
    return "true";
  }else return "false";
}

$numbers = array(1,2,3,4,5);
$newarray = array_map('cheack',$numbers);
print_r($newarray);


  ?>
  </center>
</body>
</html>