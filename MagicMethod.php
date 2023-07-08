<?php
 /* A sample __call magic method. */
class MagicMethod {
    function __call($name , $params){
        echo "Method name =>" . $name."\n";
        echo "Parameters provided\n";
        print_r($params);
    }
}
 
// Instantiate.
$obj = new MagicMethod();
 
$obj->hello("Dirks" , "Method");
