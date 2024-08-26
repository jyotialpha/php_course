<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  class Movie
  {
    public $name;
    private $rating;

    function __construct($name, $rating)

    {
      $this->name = $name;
      $this->setRating($rating);
    }


    function getRating()
    {
      return $this->rating;
    }

    function setRating($rating)
    {
      $this->rating = $rating;
    }
  }

  $movie1 = new Movie("kgf", "r.k");
  $movie2 = new Movie("r.r.r", "mauli");

  $movie1->setRating("hit");


  echo $movie1->getRating();



  ?>
</body>

</html>