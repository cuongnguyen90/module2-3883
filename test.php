<?php
include ("Animals/Chicken.php");
include ("Animals/Tiger.php");


echo ("---------Animal------------<br>");

$animals[0] = new Chicken();
$animals[1] = new Tiger();

foreach ($animals as $animal){
   echo $animal->makeSound()."<br>";
}