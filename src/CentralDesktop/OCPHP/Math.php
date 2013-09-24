<?php
/**
 * Created by IntelliJ IDEA.
 * User: thyde
 * Date: 9/24/13
 * Time: 4:01 PM
 * To change this template use File | Settings | File Templates.
 */

namespace CentralDesktop\OCPHP;

use CentralDesktop\OCPHP;

/**
 * Class Math
 * @package CentralDesktop\OCPHP
 */
class Math {


    /**
     * @param $a
     * @param $b
     *
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