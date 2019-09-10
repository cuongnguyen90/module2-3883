<?php
require_once dirname(__FILE__).'/../AbstractClass/Animal.php';

class Chicken extends Animal
{
   public function makeSound()
   {
      return "Chicker: Cluck - Cluck";
   }
}