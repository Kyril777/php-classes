<?php
/* PHP class for company employees. */
class Employee
{
  private $first_name;
  private $last_name;
  private id;
 
  public function __construct($first_name, $last_name, $age)
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
