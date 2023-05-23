<?php
// Basic OOP setup. 
class Boxer {
	
  // Properties.
  var $boxer;
  var $weight;
  var $division;

  // Methods.
  function __construct($boxer, $weight, $division) {
    $this->boxer = $boxer;
    $this->weight = $weight; 
    $this->division = $division;
  }
  function __destruct() {
    echo "{$this->boxer} weighs {$this->weight} pounds and fights in the {$this->division} division.\n"; 
  }
}

$taylor = new Boxer("Josh Taylor", 139, "super lightweight"); // Josh Warrington weighs 126 pounds and fights in the featherweight division.
$edwards = new Boxer("Sunny Edwards", 112, "flyweight"); // Sunny Edwards weighs 112 pounds and fights in the flyweight division.
$warrington = new Boxer("Josh Warrington", 126, "featherweight"); // Josh Taylor weighs 139 pounds and fights in the super lightweight division.


