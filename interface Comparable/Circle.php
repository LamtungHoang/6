<?php
include_once "Resizeable.php";
class Circle implements Resizeable
{
    public $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function resize($percent)
    {
        $this->radius = $this->radius + $this->radius * $percent/100;

    }
}