<?php

namespace CentralDesktop\OCPHP;
use CentralDesktop\OCPHP;

/**
 * Class Math
 * @package CentralDesktop\OCPHP
 */
class Math {
    /**
     * @return integer
     */
    function add($a, $b) {
        return $a + $b;
    }


    /**
     * @param $num
     * @param $denom
     *
     * @return float
     * @throws DivideByZeroException
     */

    function divide($num, $denom) {
        if ($denom == 0) {
            throw new OCPHP\DivideByZeroException("You shouldn't do that.");
        }

        return $num / $denom;
    }
}