<?php
// Function that checks for positive number.
function checkForPositive($number) {
  if($number < 0) {
    throw new Exception("Value must be a positive number.");
  }
  return true;
}

// Trigger the exception.
try {
  checkForPositive(-1);
  // Throw the exception.
  echo 'If you see this, the number is a positve number.';
}

// Catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}

// Output: Message: Value must be a positive number.
