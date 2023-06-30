<?php
/* Use traits to execute a 5-stage programming scheme. */

trait Identifier{
	public function identify()	{
		echo 'Identify problem....' .PHP_EOL;
	}
}

trait Designer{
	public function design()	{
		echo 'Design solution...' .PHP_EOL;
	}
}

trait Programmer{
	public function writeProgram()	{
		echo 'Write program...' .PHP_EOL;
	}
}

trait Checker{
	public function checkSolution()	{
		echo 'Check solution...' .PHP_EOL;
	}
}

class Program{
	use Identifier, Designer, Programmer, Checker;

	public function run(){
		$this->identify();
		$this->design();
		$this->writeProgram();
		$this->checkSolution();

		echo 'Execute file...done' .PHP_EOL;
	}
}

$program = new Program();
$program->run();
