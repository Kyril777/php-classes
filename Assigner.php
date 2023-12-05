<?php
// Iterate though a multi-dimensional array with a foreach loop.
class Assigner implements Iterator {
	
	private int $index;
	private array $arrays;
	private int $countAny;
	
	public function __construct(array ...$arrays) {
		$this->countAny = count($arrays[0]);
		$this->arrays = $arrays;
	}
	
	public function current(): array {
		$return = [];
		foreach ($this->arrays as $array) {
			$return[] = $array[$this->index];
		}
		return $return;
	}	
		
	public function next(): void {
		$this->index++;
	}
	
	public function key(): mixed {
		return $this->index;
	}
	
	public function valid(): bool {
		return $this->index < $this->countAny;
	}
	
	public function rewind(): void {
		$this->index = 0;
	}
}
	
$assigner = new Assigner(
	[1, 2, 3, 4],
	['New Jersey', 'Pennsylvania', 'Delaware', 'Maryland'],
	['Trenton', 'Harrisburg', 'Dover', 'Annapolis']
);
	
foreach ($assigner as [$region, $state, $capital]) {
	echo PHP_EOL;
	printf('Region: %s, State: %s, Capital: %s', $region, $state, $capital);
}


/* Output:
Region: 1, State: New Jersey, Capital: Trenton
Region: 2, State: Pennsylvania, Capital: Harrisburg
Region: 3, State: Delaware, Capital: Dover
Region: 4, State: Maryland, Capital: Annapolis
*/
