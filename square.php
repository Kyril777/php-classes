<?php
// Use the __invoke() method to call an object as a function.
class Square{
	public function __invoke(
		float|int $value
	): float|int
	{
		return $value * $value;
	}
}

$squared = new Square;

$result = $squared(5);

print $result; // Output: 25
