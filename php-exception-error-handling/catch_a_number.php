<?php
// Thrown an exception if number is zero..
function test_func($num) {
    echo "Echo before the try.";
    try {
        echo "\n Entered the try block.";
             
        // Check if zero is entered.
        if($num == 0) {
            // Throw an exception if $num is zero.
            throw new Exception('number is zero.');
                 
            // Do not execute this code. 
            echo "\n Execute after throw.";
        }
    }
         
    // Catch when try throws an exception.
    catch(Exception $e) {
            echo "\n Exception Caught: ", $e->getMessage();
        }
         
        // Execute this catch, 
        echo "\n Execute catch: ";
}
 
// Exception, yes.
test_func(5);
 
// Exception, not. 
test_func(0);

/* Output: Echo before the try.
 Entered the try block.
 Execute catch: Echo before the try.
 Entered the try block.
 Exception Caught: number is zero.
 Execute catch: catch
*/
