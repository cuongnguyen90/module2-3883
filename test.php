<?php
include ("Animals/Chicken.php");
include ("Animals/Tiger.php");
include ("Fruits/Apple.php");
include ("Fruits/Orange.php");

echo ("---------Animal------------<br>");

$animals[0] = new Chicken();
$animals[1] = new Tiger();

foreach ($animals as $animal){
   echo $animal->makeSound()."<br>";

   if ($animal instanceof Chicken){
      echo $animal->howtoEat()."<br>";
   }
}

echo ('--------- Fruits------------<br>');

$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit) {
   echo $fruit->howToEat() . '<br>';
}