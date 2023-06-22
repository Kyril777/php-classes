<?php
/* Produce mathematical constants through polymorphism. */
interface Constant {
	public function printConstant();
}

class Pi implements Constant {
  public function printConstant() {
		return 3.14159;
	}
}

class Tau implements Constant {
  public function printConstant() {
		return 6.28318;
	}
}

class EulerNumber implements Constant {
  public function printConstant() {
		return 2.71828;
	}
}

class EulerConstant implements Constant {
  public function printConstant() {
		return 0.57721;
	}
}

class GoldenRatio implements Constant {
  public function printConstant() {
		return 1.61803;
	}
}

function produce($constants) {
	foreach ($constants as $constant) {
		echo $constant->printConstant() .PHP_EOL;
	}
}

$constants = [ new Pi(), new Tau(), new EulerNumber(), new EulerConstant(), new GoldenRatio()];

produce($constants);

/* Result:
3.14159
6.28318
2.71828
0.57721
1.61803
*/
