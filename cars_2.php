<?php
/* Second PHP class for cars.. */
abstract class Cars {
  public $model;
  public $motto;
  public function __construct($model, $motto) {
    $this->model = $model;
    $this->motto = $motto;
  }
  public function intro() : string {
    return "The motto for $this->model is \"$this->motto.\""; 
  }  
}

// Child classes
class Ferrari extends Cars {
}

class Lexus extends Cars {
}

class BMW extends Cars {
}

// Create objects from the child classes.
$ferrari = new ferrari("Ferrari", "We Are the Competition");
echo $ferrari->intro() .PHP_EOL;  // The motto for Ferrari is "We Are the Competition."

$lexus = new lexus("Lexus", "The Pursuit of Perfection");
echo $lexus->intro() .PHP_EOL;  // The motto for Lexus is "The Pursuit of Perfection."

$bmw = new bmw("BMW", "Sheer Driving Pleasure");
echo $bmw->intro() .PHP_EOL;  // The motto for BMW is "Sheer Driving Pleasure."


