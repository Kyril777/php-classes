<?php
/*
__toString() is called when an object is passed to a function (esp echo() or print()) when its context is expected to be a string. 
*/

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

/* Another __toString() method to create a class. */
class Student 
{
    protected $name;
    protected $age;

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    private function setName($name){
        $this->name = $name;
    }

    private function setAge($age){
        $this->age = $age;
    }

    public function __construct($name, $age) {
        $this->setName($name);
        $this->setAge($age);
    }

    public function __toString(){
        return "The student ". $this->getName(). " is ". $this->getAge() . " years old.";
    }
}

$reis = new Student('Reis', 16);
echo $reis; // The student Reis is 16 years old.


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



/* A sample __construct() method to create HTML elements. */
class MagicConstruct{
	private $attributes = [];

	private $tag;

	public function __construct($tag){
		$this->tag = $tag;
	}

	public function __set($name, $value){
		$this->attributes[$name] = $value;
	}

	public function html($innerHTML = ''){
		$html = "<{$this->tag}";
		foreach ($this->attributes as $key => $value) {
			$html .= ' ' . $key . '="' . $value . '"';
		}
		$html .= '>';
		$html .= $innerHTML;
		$html .= "</$this->tag>";

		return $html;
	}
}

$div = new MagicConstruct('div');

$div->id = 'page';
$div->class = 'info';

echo $div->html('Inside of a div.'); // <div id="page" class="info">Inside of a div.</div>


/* Use the MagicInvoke class, to be passed as a function, in order to sort a gamers array. 
Use __invoke() to call an object as a function. */
class MagicInvoke{
    private $key;

    public function __construct(string $key){
        $this->key = $key;
    }

    public function __invoke($a, $b){
        return $a[$this->key] <=> $b[$this->key];
    }
}

$gamers = [
    ['id' => 1001, 'gamer' => 'Jake_Squeeze', 'points' => 25550],
    ['id' => 1951, 'gamer' => 'Tempest006', 'points' => 13670],
    ['id' => 1229, 'gamer' => 'SystemDebt', 'points' => 48800]
];

// Sort players alphabetically.
usort($gamers, new MagicInvoke('gamer'));
print_r($gamers);
/*
Array
(
    [0] => Array
        (
            [id] => 1001
            [gamer] => Jake_Squeeze
            [points] => 25550
        )

    [1] => Array
        (
            [id] => 1229
            [gamer] => SystemDebt
            [points] => 48800
        )

    [2] => Array
        (
            [id] => 1951
            [gamer] => Tempest006
            [points] => 13670
        )
)
*/

// Sort players by points.
usort($gamers, new MagicInvoke('points'));
print_r($gamers);
/*
Array
(
    [0] => Array
        (
            [id] => 1951
            [gamer] => Tempest006
            [points] => 13670
        )

    [1] => Array
        (
            [id] => 1001
            [gamer] => Jake_Squeeze
            [points] => 25550
        )

    [2] => Array
        (
            [id] => 1229
            [gamer] => SystemDebt
            [points] => 48800
        )
)
*/
