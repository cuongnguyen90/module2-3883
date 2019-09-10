<?php
require_once (dirname(__DIR__).'/AbstractClass/Fruits.php');

class Apple extends Fruit
{
   public function howtoEat()
   {
      return "Apple could be slided";
   }

}