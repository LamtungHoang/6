<?php
include_once "Square.php";
$square1 = new Square(4,"red");
echo $square1->howToColor()."<br>";
echo $square1->getArea();