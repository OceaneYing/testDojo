<?php

namespace Tests;

use App\Bowling;
use PHPUnit\Framework\TestCase;

class BowlingTest extends TestCase
{
    public function testBowling()
    {
        // arrange
        $target = new Bowling();

        // assert
        $this->assertEquals(90, $target->bowling("9- 9- 9- 9- 9- 9- 9- 9- 9- 9-"));
        // $this->assertEquals(300, $target->bowling("X X X X X X X X X X X X"));
        // $this->assertEquals(150, $target->bowling("5/ 5/ 5/ 5/ 5/ 5/ 5/ 5/ 5/ 5/5"));
    }
}
