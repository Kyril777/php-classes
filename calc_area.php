<?php
/* Create shape objects to calculate each area. */
interface Shape{
  public function calculateArea();
}

class Square implements Shape{
  private $side;
  public function __construct($side){
    $this->side = $side;
  }
   public function calculateArea(){
    $area = $this->side * $this->side;
    echo $area .PHP_EOL;
  }
}

class Rectangle implements Shape{
  private $length;
  private $height;

  public function __construct($length, $height){
    $this->length = $length;
    $this->height = $height;
  }

  public function calculateArea(){
    $area = $this->length * $this->height;
    echo $area .PHP_EOL;
   }
}

class Triangle implements Shape{
  private $base;
  private $height;

  public function __construct($base, $height){
    $this->base = $base;
    $this->height = $height;
  }

  public function calculateArea(){
    $initial = $this->base * $this->height;
    $area = $initial / 2;
    echo $area .PHP_EOL;
  }
}

$sqe = new Square(4); // 16
$sqe->calculateArea();

$rct = new Rectangle(4, 5); // 20
$rct->calculateArea();

$tri = new Triangle(6, 7); // 21
$tri->calculateArea();
