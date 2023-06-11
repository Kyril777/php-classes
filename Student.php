<?php
// Create class that establishes age and later update it.
class Student {
	public $age = 0;

  function __construct($age) {
    $this->age = $age;
  }	
	
	public function changeAge($age) {
		$this -> age = $age;
	}	
}

// Create object from class.
$sophomoreStud = new Student(20);

# Previous age.
echo $sophomoreStud -> age .PHP_EOL; // 20

// Update age of student.
$sophomoreStud -> changeAge(21);
	
# Updated age/
echo $sophomoreStud -> age .PHP_EOL; // 21
