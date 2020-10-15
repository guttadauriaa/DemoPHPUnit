<?php

use Guttadauria\Utils\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{

    /** @test  */
    public function testDouble() {
        $this->assertEquals(4, \Guttadauria\Utils\Math::double(2));
    }

    /** @test  */
    public function testWrongDouble() {
        $this->assertNotEquals(5, \Guttadauria\Utils\Math::double(3),"Should not be equals");
    }

    /** @test  */
    public function testCarre() {
        $this->assertEquals(1, Math::carre(1));
        $this->assertEquals(9, Math::carre(3));
        $this->assertEquals(64, Math::carre(8));
    }

    /** @test  */
    public function testPuissance() {
        $this->assertEquals(27, Math::puissance(3,3));
        $this->assertEquals(1, Math::puissance(11, 0));
        $this->assertEquals(131, Math::puissance(131, 1));
        $this->assertEquals(16777216, Math::puissance(8, 8));
    }
}