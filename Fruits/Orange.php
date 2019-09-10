<?php
require_once (dirname(__DIR__).'/AbstractClass/Fruits.php');

class Orange extends Fruit
{

   public function howToEat()
   {
      return "Orange could be juiced";
   }
}