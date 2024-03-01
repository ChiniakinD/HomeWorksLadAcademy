<?php
require_once "service/tasks.php";
use PHPUnit\Framework\TestCase;
class MyTest extends TestCase {
    public function test_odd()
    {
        $this->assertEquals(1, odd(2));
        $this->assertEquals(1, odd(1231244));
        $this->assertEquals(1, odd(2354228));

        $this->assertEquals(0, odd(1));
        $this->assertEquals(0, odd(1234123445));
        $this->assertEquals(0, odd(4532457));
    }

    public function test_rook() {
        $this->assertTrue(rook("E1", "e4"));
        $this->assertTrue(rook("h1","A1" ));
        $this->assertTrue(rook("c7","B7" ));

        $this->assertFalse(rook("e1","h4"));
        $this->assertFalse(rook("b3","G4"));
        $this->assertFalse(rook("e7","H4"));
    }

    public function test_king()
    {

        $this->assertTrue(king("e1", "e2"));
        $this->assertTrue(king("d1", "c2"));
        $this->assertTrue(king("h1", "h2"));

        $this->assertFalse(king("h1", "h3"));
        $this->assertFalse(king("h3", "f3"));
        $this->assertFalse(king("b7", "b5"));
    }
}
