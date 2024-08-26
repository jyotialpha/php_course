<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

    //class
      class Book1{
        var $book_name;
        var $book_author;
        var $book_price;
      };
      //object1
      $book1 = new Book1();
      $book1->book_name = "Harry Potter";
      $book1->book_author = "J.K. Rowling";
      $book1->book_price = 1223.45;

      echo $book1->book_price.'<br>';

      //object2
      $book2 = new Book1();
      $book2->book_name = "The Lord of the Rings";
      $book2->book_author = "J.R.R. Tolkien";
      $book2->book_price = 123.45;
      
      echo $book2 ->book_author;


      


  ?>
</body>

</html>