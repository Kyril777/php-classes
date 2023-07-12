<?php
/* A sample __toString() method to create class. */
class MagicClass{
    public $className;

    public function __construct($className)    {
        $this->className = $className;
    }

    public function __toString()    {
        return $this->className;
    }
}

$firstClass = new MagicClass('Abra');
echo $firstClass; // Abra

$secondClass = new MagicClass('Cadabra');
echo $secondClass; // Cadabra


 /* A sample __call magic method. */
class MagicCall {
    function __call($name, $params){
        echo "Method name =>" . $name."\n";
        echo "Parameters provided\n";
        print_r($params);
    }
}
 
$call = new MagicCall();
$call->hello("Dirks", "Method");

/*
Method name =>hello
Parameters provided
Array
(
    [0] => Dirks
    [1] => Method
)
*/

/* A sample __staticCall() magic method. */
<?php

class MagicCallStatic{
	public static function __callStatic($method, $params){
		var_dump($method, $params);
	}
}

MagicCallStatic::sample('hello');
MagicCallStatic::staticFunction('paramOne','paramTwo','paramThree');
/*
string(6) "sample"
array(1) {
  [0]=>
  string(5) "hello"
}
string(14) "staticFunction"
array(3) {
  [0]=>
  string(8) "paramOne"
  [1]=>
  string(8) "paramTwo"
  [2]=>
  string(10) "paramThree"
}
*/


/* A sample __get magic method. */
class MagicGreeting {
    function __get($name){
        echo "Good morning, '" . $name . "'!";
    }
}
 
$dave = new MagicGreeting();
$dave->Dave; // Good morning, 'Dave'!

$whitney = new MagicGreeting();
$whitney->Whitney; // Good morning, 'Whitney'!

$kate = new MagicGreeting();
$kate->Kate; // Good morning, 'Kate'!
