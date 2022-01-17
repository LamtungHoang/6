<?php

include_once 'Comparator.php';
include_once 'Circle.php';

class CircleComparator extends Circle implements Comparator
{

    public function compare($circleOne, $circleTwo)
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();

        if ($radiusOne > $radiusTwo) {
            return 1;
        } else if ($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
        // TODO: Implement compare() method.
    }
}