<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

//Note:- Constructor is a function inside a class is called when object is created it may be default constructor or parametric constructor.


  class Book
  {
    public $title;
    public $author;
    public $year;

    //constructtor
    function __construct($Ctitle, $Cauthor, $Cyear) {
      $this->title = $Ctitle;
      $this->author = $Cauthor;
      $this->year = $Cyear;
    }
  }


$book1 = new Book("harry potter","vbf","2024");
$book2 = new Book("the garden","j.p gosh","1920");

echo $book1->author."<br>";
echo $book1->title."<br>";

echo $book2->author."<br>";
echo $book2->title;


  ?>
</body>

</html>