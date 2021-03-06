<?php

namespace DivineOmega\Distance\Types;

use DivineOmega\Distance\Interfaces\TypeInterface;
use DivineOmega\Distance\Point;

/**
 * Class Euclidean
 * @package DivineOmega\Distance\Types
 */
class Euclidean extends EuclideanSquare implements TypeInterface
{
    /**
     * @param Point $a
     * @param Point $b
     * @return float|int
     */
    public function calculate(Point $a, Point $b)
    {
        $distance = parent::calculate($a, $b);
        $distance = sqrt($distance);

        return $distance;
    }
}