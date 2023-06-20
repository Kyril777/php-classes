<?php
/* Assign math functions to objects via traits. */
trait Power {
    public function power($a, $b) {
        echo pow($a, $b) .PHP_EOL;
    }
}

trait SquareRoot {
    public function square_root($a) {
        echo sqrt($a) .PHP_EOL;
    }
}

trait CubeRoot {
    public function cube_root($a) {
        $x = $a**(1/3) .PHP_EOL;
        echo $x;
    }
}

/* Assign Edgar the ability to power and cube root. */
class Edgar {
    use Power, CubeRoot;
}
  
/* Assign Quinn the ability to square root and cube root. */
class Quinn {
    use SquareRoot, CubeRoot;
}

/* Assign Sally the ability to power and square root. */
class Sally {
    use Power, SquareRoot;
}
    
$edgar = new Edgar();
$edgar->power(3,4); // 81
$edgar->cube_root(64); // 4
$quinn = new Quinn();
$quinn->square_root(144); // 12
$quinn->cube_root(12167); // 23
$sally = new Sally();
$sally->power(6, 6); // 46656
$sally->square_root(93.5089); // 9.67
