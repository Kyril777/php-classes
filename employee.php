<?php
/**
 * PHP class for company employees.
 */
class Person
{
  private $first_name;
  private $last_name;
 
  public function __construct($first_name, $last_name)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
  }
  public function getFirstName()
  {
    return $this->first_name;
  }
  public function getLastName()
  {
    return $this->last_name;
  }
  public function callToFirstAndLastName()
  {
    return "{$this->first_name} {$this->last_name}";
  }
}

// First class instantiation.
$objPersonOne = new Person('Wes', 'Winston');
echo $objPersonOne->getFirstName() .PHP_EOL; // prints 'Wes' 
echo $objPersonOne->getLastName() .PHP_EOL; // prints 'Winston' 
echo $objPersonOne->callToFirstAndLastName() .PHP_EOL; // prints 'Wes Winston'

// Second class instantiaion.
$objPersonTwo = new Person('George', 'Declan');
echo $objPersonTwo->getFirstName() .PHP_EOL; // prints 'George' 
echo $objPersonTwo->getLastName() .PHP_EOL; // prints 'Declan' 
echo $objPersonTwo->callToFirstAndLastName() .PHP_EOL; // prints 'George Declan'

// Employee inherits from Person.
class Employee extends Person
{
  private $id;
  private $department;
  private $salary;
  public function getId()
  {
    return $this->id;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getDepartment()
  {
    return $this->department;
  }
  public function setDepartment($department)
  {
    $this->department = $department;
  }
  public function getSalary()
  {
    return $this->salary;
  }
  public function setSalary($salary)
  {
    $this->salary = $salary;
  }
  public function getNameAndId()
  {
    return $this->callToProtectedNameAndId();
  }
}

$employee = new Employee('Ewan', 'Byron');
$employee->setId(975310);
$employee->setDepartment('Accounting');
$employee->setSalary('45000');
echo $employee->callToFirstAndLastName() .PHP_EOL; // prints 'Ewan Byron'
echo $employee->getId() .PHP_EOL; // prints '30' 
echo $employee->getDepartment() .PHP_EOL; // prints 'Accounting' 
echo $employee->getSalary() .PHP_EOL; // prints '975310' 
