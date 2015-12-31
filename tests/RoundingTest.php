<?php

use function GameReplays\Functions\roundDown;
use function GameReplays\Functions\roundInt;
use function GameReplays\Functions\roundUp;

class RoundingTest extends PHPUnit_Framework_TestCase
{
    public function test_rounds_decimal_up_to_nearest_integer()
    {
        $rounded = roundUp(3.14);
        $this->assertSame($rounded, 4);
    }

    public function test_does_not_round_up_integer()
    {
        $rounded = roundUp(3);
        $this->assertSame($rounded, 3);
    }

    public function test_rounds_decimal_down_to_lowest_integer()
    {
        $rounded = roundDown(3.99);
        $this->assertSame($rounded, 3);
    }

    public function test_does_not_round_down_integer()
    {
        $rounded = roundDown(3);
        $this->assertSame($rounded, 3);
    }

    public function test_rounds_int_down_if_less_than_half()
    {
        $rounded = roundInt(3.14);
        $this->assertSame($rounded, 3);
    }

    public function test_rounds_int_down_if_half()
    {
        $rounded = roundInt(3.5);
        $this->assertSame($rounded, 4);
    }
}
