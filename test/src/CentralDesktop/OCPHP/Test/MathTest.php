<?php

namespace CentralDesktop\OCPHP\Test;

use CentralDesktop\OCPHP;

class MathTest extends \PHPUnit_Framework_TestCase {

    public
    function testAddSimple() {
        $math = new OCPHP\Math();

        $this->assertEquals(1, $math->add(0, 1));
        $this->assertEquals(2, $math->add(1, 1));
        //$this->assertEquals(2, $math->add(1, 2));
    }

    /**
     * @dataProvider addProvider
     */
    public
    function testAddDD($result, $a, $b) {
        $math = new OCPHP\Math();

        $this->assertEquals($result, $math->add($a, $b));
    }

    /**
     * Provides data for the test above
     *
     * @return array
     *
     */
    public
    function addProvider() {
        return array(
            array(1, 0, 1),
            array(2, 1, 1),
            array(3, 2, 1),
            //array(3, 2, 2),
        );
    }

    public
    function testDivide() {
        $math = new OCPHP\Math();

        $this->assertEquals(1, $math->divide(1, 1));
        $this->assertEquals(1.5, $math->divide(3, 2));
        $this->assertEquals(-1.5, $math->divide(3, -2));
    }


    /**
     * @expectedException \CentralDesktop\OCPHP\DivideByZeroException
     *
     * I could have also called
     * $this->setExpectedException('\CentralDesktop\OCPHP\DivideByZeroException');
     *
     */
    public
    function testDivideByZero() {
        $math = new OCPHP\Math();

        $math->divide(10, 0);
    }

}