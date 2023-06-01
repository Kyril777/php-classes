<?php
/* PHP class for car inspection. */
class Car {
  public $model;
  public $make;
  public $year;
  public function __construct($model, $make, $year) {
    $this->model = $model;
    $this->make = $make;
    $this->year = $year;
  }
  public function intro() {
    echo "Inventory has a {$this->year} {$this->model} {$this->make}.\n"; 
  }
}

// If car was inspected today, extend class.
class Inspected extends Car {
  public function message() {
    echo "Last inspection made on " .  date("m/d/Y") ."\n";
  }
}

$ferrari = new Inspected ("Ferrari", "F14", "2005");
$ferrari->intro();
$ferrari->message();
