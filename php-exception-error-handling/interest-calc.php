<?php
// Calculate an account after placed with 3% interest. Value cannot be 0 or a negative number. Add a "finally" statement in the error-handling.
function interest_calc($x) {
    if ($x <= 0) {
        throw new Exception('Account must have positive value.');
    }
    return $x * 1.03;
}

try {
    echo interest_calc(1) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
	echo "Complete.\n";
}

try {
    echo interest_calc(-1) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
	echo "Complete.\n";
}

// Output: 
// 1.03
// Complete.
// Caught exception: Account must have positive value.
// Complete.
