<?php
/* PHP interface that extends the speak() method to classes. 
Note: in a real-world application, interfaces and classes are placed in separate files.
*/
interface President {
  public function speak();
}


class FDR implements President {
  public function speak() {
    echo "Happiness lies in the joy of achievement and the thrill of creative effort" .PHP_EOL;
  }
}

class JFK implements President {
  public function speak() {
    echo "Efforts and courage are not enough without purpose and direction." .PHP_EOL;
  }
}

class LBJ implements President {
  public function speak() {
    echo "Yesterday is not ours to recover, but tomorrow is ours to win or lose." .PHP_EOL;
  }
}

// Create a list of presidents.
$fRoosevelt = new FDR();
$jKennedy = new JFK();
$lJohnson = new LBJ();
$presidents = array($fRoosevelt, $jKennedy, $lJohnson);

// Tell each president to speak
foreach($presidents as $president) {
  $president->speak();
}

/* 
Happiness lies in the joy of achievement and the thrill of creative effort
Efforts and courage are not enough without purpose and direction.
Yesterday is not ours to recover, but tomorrow is ours to win or lose.
*/
