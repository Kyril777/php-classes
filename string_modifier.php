<?php
/* Employs PHP traits to modify strings -- either to capitalize, lowercase, or both. */
trait capitalizer {
  public function capitalize($string) {
    echo strtoupper($string) .PHP_EOL; 
  }
}

trait lowercaser {
  public function lowercase($string) {
    echo strtolower($string) .PHP_EOL; 
  }
}

class CapitalizeOnly {
  use capitalizer;
}

class StringModifier {
  use capitalizer, lowercaser;
}

$obj = new CapitalizeOnly();
$obj->capitalize("records");  // RECORDS
// $obj2->lowercase("POMEGRANATE"); // Warning: Undefined variable $obj2 in /tmp/preview on line 24

$obj2 = new StringModifier();
$obj2->capitalize("outlaw");  // OUTLAW
$obj2->lowercase("TURMERIC"); // turmetic
