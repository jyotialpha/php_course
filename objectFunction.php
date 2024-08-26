<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

//onject function in php is in class it used at the object level logical conditions;

  class Student
  {
    public $name;
    public $age;
    public $cgpa;

    function __construct($name, $age, $cgpa)

    {
      $this->name = $name;
      $this->age = $age;
      $this->cgpa = $cgpa;
    }

    //object function
    function hasHons()
    {
      if ($this->cgpa >= 6.00) return "yes you got the hons";
      else return "No you cant get the hons";
    }
  }


  $student1 = new Student("RAMA",21,5.33);
  $student2 = new Student("HARI",22,8.23);

  echo "This is for student1:-".$student1->hasHons()."<br>";
  echo "This is for student2:-".$student2->hasHons();

  ?>
</body>

</html>