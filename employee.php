<?php
/**
 * PHP class for company employees.
 */
class Employee
{
  private $first_name;
  private $last_name;
  private $id;
 
  public function __construct($first_name, $last_name, $id)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->id = $id;
  }
  public function getFirstName()
  {
    return $this->first_name;
  }
  public function getLastName()
  {
    return $this->last_name;
  }
  public function getId()
  {
    return $this->id;
  }
}

// First class instantiation.
$objEmployeeOne = new Employee('Wes', 'Winston', 123456);
echo $objEmployeeOne->getFirstName() .PHP_EOL; // print 'Wes' 
echo $objEmployeeOne->getLastName() .PHP_EOL; // prints 'Winston' 
echo $objEmployeeOne->getId() .PHP_EOL; // prints '123456'

// Second class instantiaion.
$objEmployeeTwo = new Employee('Declan', 'George', 246800);
echo $objEmployeeTwo->getFirstName() .PHP_EOL; // prints 'Declan' 
echo $objEmployeeTwo->getLastName() .PHP_EOL; // prints 'George' 
echo $objEmployeeTwo->getId() .PHP_EOL; // prints '246800'
