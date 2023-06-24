<?php
/* Create shape objects to calculate each area. */
interface Shape{
  public function calculateArea()
}

class Square implements Shape{}

class Rectangle implements Shape{}

class Triangle implements Shape{}

$sqe = new Square();

$sqe->calculateArea();

$rct = new RectangleExmp();

$rct->calculateArea();

$tri = new TriangleExmp();;

$tri->calculateArea();
