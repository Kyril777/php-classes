<?php
// Use the __clone() magic method to duplicate a class and reuse its attributes and functions. 
class CountObject {
    static $counting = 0;
    public $count;

    public function __construct() {
        $this->count = ++self::$counting;
    }

    public function __clone() {
        $this->count = ++self::$counting;
    }
}

class DuplicateObject {
    public $object1;
    public $object2;

    function __clone() {
        $this->object1 = clone $this->object1;
    }
}

// Original object.
$obj = new DuplicateObject();
$obj->object1 = new CountObject();
$obj->object2 = new CountObject();

print("Original Object:\n");
print_r($obj);
/* Output:
Original Object:
DuplicateObject Object
(
    [object1] => CountObject Object
        (
            [count] => 1
        )

    [object2] => CountObject Object
        (
            [count] => 2
        )
*/

// Duplicate object.
$obj2 = clone $obj;

print("Cloned Object:\n");
print_r($obj2);
/* Output:
Cloned Object:
DuplicateObject Object
(
    [object1] => CountObject Object
        (
            [count] => 3
        )

    [object2] => CountObject Object
        (
            [count] => 2
        )
)
*/
