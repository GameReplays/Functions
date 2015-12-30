<?php

namespace GameReplays\Functions;

/**
 * Normalizes the given value between 0 and 1, based on the ratio between the given value and expected maximum value
 * @param int|float $value
 * @param int|float $upperBound
 * @return int|float
 */
function normalize($value, $upperBound)
{
    return clamp($value / $upperBound, 0, 1);
}

/**
 * Clamps the given value between the given min and max.
 * @param int|float $value
 * @param int|float $min
 * @param int|float $max
 * @return int|float
 */
function clamp($value, $min, $max)
{
    return max($min, min($value, $max));
}