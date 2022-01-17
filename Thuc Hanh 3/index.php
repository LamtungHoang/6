<?php
include_once "CircleComparator.php";
include_once 'Circle.php';

$circleOne = new Circle("circleOne", 5);
$circleTwo = new Circle("circleTwo", 5);
$circleComparator = new CircleComparator($circleOne,$circleTwo);

//echo $circleTwo->getRadius();
var_dump($circleComparator->compare($circleOne, $circleTwo));