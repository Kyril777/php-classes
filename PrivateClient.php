<?php
/* Private properties remain visible when executing var_dump() function. To only display presentable properties, use the debugInfo() magic method and only return desired property.  
*/
class Client {
	public string $firstName = "Oscar";
	private string $lastName = "Duarte";
}

$client = new Client();

var_dump($client);

/* Output:
object(Client)#1 (2) {
  ["firstName"]=>
  string(5) "Oscar"
  ["lastName":"Client":private]=>
  string(6) "Duarte"
}
*/

class Client2 {
	public string $firstName = "Oscar";
	private string $lastName = "Duarte";
	
	public function __debugInfo(){
		return ["firstName => $this->firstName"];
	}
}

$client2 = new Client2();

var_dump($client2);

/* Output:
object(Client2)#2 (1) {
  [0]=>
  string(18) "firstName => Oscar"
}
*/
