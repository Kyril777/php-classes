<?php
// Class for an account.
class Account {
  public $customer;
  public $account;

  function __construct($customer, $account) {
    $this->customer = $customer; 
    $this->account = $account; 
  }
  function get_customer() {
    return $this->customer;
  }
  function get_account() {
    return $this->account;
  }
}

$collins = new Account("Collins", "checking");
echo $collins->get_customer(); // Output: Collins
echo "<br>";
echo $collins->get_account(); // Ouput: checking
