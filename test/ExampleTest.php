<?php
/**
 * @author: Steve - G Media 2015
 * 
 */

namespace test;

class helloWorld {

}

class ExampleTest extends \PHPUnit_Framework_TestCase {

    /**
     * @covers \test\helloWorld
     */
    public function testPHPUnitWorking() {
        $this->assertTrue(true, true);
    }
}
 