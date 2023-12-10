<?php
// Create a Member class to filter names of members out of a $names array.
// Use thge __invoke method to serve as a callback. 

class Member {
	private array $members = ["Fung", "Bernard", "Watkins"];
	
	public function __invoke(string $name): bool {
		return in_array($name, $this->members, true);
	}
}

$names = array_filter(["Haney", "Fung", "Regents", "Watkins"], new Member());

print_r($names);
/* Output:
Array
(
    [1] => Fung
    [3] => Watkins
)
*/
