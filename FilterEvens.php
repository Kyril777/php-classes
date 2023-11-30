<?php
/* Create PHP class the filters out even numbers out of an array of numbers;
Create such class from extending the FilterIterator.
*/
class FilterEvens extends FilterIterator {
	public function __construct(array $array) {
		parent::__construct(new ArrayIterator($array));
	}
	
	public function accept(): bool {
		return $this->current() % 2 === 0;
	}
	
	public function toArray(): array {
		return [...$this];
	}
}

$filterEvens = new FilterEvens([0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89]);

foreach ($filterEvens as $evenNumbers) {
	echo $evenNumbers. PHP_EOL;
}
// Output: 0, 2, 8, 34

print_r($filterEvens->toArray());
/* Output:
Array
(
    [0] => 0
    [1] => 2
    [2] => 8
    [3] => 34
)
*/
