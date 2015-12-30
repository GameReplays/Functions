<?php

use function GameReplays\Functions\clamp;

class ClampTest extends PHPUnit_Framework_TestCase
{
    public function test_clamp_lower_bound()
    {
        $clamped = clamp(-1, 0, 10);
        $this->assertSame($clamped, 0);
    }

    public function test_clamp_upper_bound()
    {
        $clamped = clamp(20, 0, 10);
        $this->assertSame($clamped, 10);
    }
}
