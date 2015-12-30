<?php

use function GameReplays\Functions\normalize;

class NormalizeTest extends PHPUnit_Framework_TestCase
{
    public function test_normalize_clamps_to_0()
    {
        $normalized = normalize(-100, 100);
        $this->assertSame($normalized, 0);
    }

    public function test_normalize_clamps_to_1()
    {
        $normalized = normalize(100, 100);
        $this->assertSame($normalized, 1);
    }

    public function test_normalizes_value_to_ratio_of_upper_bound()
    {
        $normalized = normalize(50, 100);
        $this->assertSame($normalized, 0.5);
    }
}
