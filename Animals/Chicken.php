<?php
require_once dirname(__FILE__).'/../AbstractClass/Animal.php';
include_once(dirname( __FILE__ ) . '/../InterfaceClass/Edible.php');
class Chicken extends Animal implements Edible
{
   public function makeSound()
   {
      return "Chicker: Cluck - Cluck";
   }
   public function howtoEat()
   {
      return "Could be fried";
   }
}