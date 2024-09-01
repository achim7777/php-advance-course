<?php

class Fruit {
     // property
     public $name;
     public $color;



     /**
      * Get the value of name
      */ 
     public function getName()
     {
          return $this->name;
     }

     /**
      * Set the value of name
      *
      * @return  self
      */ 
     public function setName($name)
     {
          $this->name = $name;

          return $this;
     }

     
     /**
      * Get the value of color
      */ 
     public function getColor()
     {
          return $this->color;
     }

     /**
      * Set the value of color
      *
      * @return  self
      */ 
     public function setColor($color)
     {
          $this->color = $color;

          return $this;
     }
}

$apple = new Fruit();
$apple->setName('Apple');

$banana = new Fruit();
$banana->setName('Banana');

// result
echo $apple->getName();
echo "<br/>";
echo $banana->getName();
echo "<br/>";

