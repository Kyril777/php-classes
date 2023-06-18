<?php
/* Use traits to insert factorial functions in two objects. */
trait Factorial {
  function factorial($number){
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++){
      $factorial = $factorial * $i;
    }
  echo $factorial;
  }
}

class F1 {
    use Factorial;
}

class F2 {
    use Factorial;
}

$o = new F1(); $o->factorial(6); // 720
$p = new F2(); $p->factorial(5); // 120
