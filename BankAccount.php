<?php
class BankAccount {
  public $last_name;
  public $number;
  public $type;
  public $balance;
  
  public function __construct(string $last_name, int $number, string $type, float $balance = 0.00){
    $this->last_name = $last_name; 
    $this->number = $number;
    $this->type = $type;
    $this->balance = $balance;
  }
  
  public function deposit(float $amount) {
    $this->balance += $amount;
    return $this->balance;
  }
  
  public function withdraw(float $amount) {
    $this->balance -= $amount;
    return $this->balance;
  }
  
  public function __destruct(){
  	echo "The {$this->last_name} account numbered {$this->number} with a {$this->type} type has a balance of {$this->balance} as of " .  date("F d, Y h:i:s A") . ".";
  }
}

$smithersAccount = new BankAccount("Smithers", 12345, "checking", 100.01); // The Smithers account numbered 12345 with a checking type has a balance of 100.01 as of June 12, 2023 05:53:36 AM.
$smithersAccount -> deposit(50.00); // The Smithers account numbered 12345 with a checking type has a balance of 150.01 as of June 12, 2023 05:53:56 AM.
$smithersAccount -> withdraw(25.00); // // The Smithers account numbered 12345 with a checking type has a balance of 125.01 as of June 12, 2023 05:54:39 AM.
