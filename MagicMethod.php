<?php
 /* A sample __call magic method. */
class MagicCall {
    function __call($name , $params){
        echo "Method name =>" . $name."\n";
        echo "Parameters provided\n";
        print_r($params);
    }
}
 
// Instantiate.
$call = new MagicCall();
$call->hello("Dirks" , "Method");

/*
Method name =>hello
Parameters provided
Array
(
    [0] => Dirks
    [1] => Method
)
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
