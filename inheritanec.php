<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <center>
  <?php

  class Chief
  {
    function commonDsidh()
    {
      echo "Common Dsidh Rice.<br>";
    }
    function spicyFood()
    {
      echo "Spicy Food .<br>";
    }
    function extraItem()
    {
      echo "Extra Item Biriyani .<br>";
    }
  }

  class IndianChief extends Chief
  {

    function extraItem()
    {
      echo "Extra Item Chicken .<br>";
    }
  }


  $chief = new Chief();
  $chief->commonDsidh();
  $chief->spicyFood();
  $chief->extraItem();
  

  $indiancheif = new IndianChief();
  $indiancheif->commonDsidh();
  $indiancheif->spicyFood();
  $indiancheif->extraItem();

  ?>
  </center>
</body>

</html>