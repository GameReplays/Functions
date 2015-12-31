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

/**
 * Always rounds the given float up to the highest integer, and casts to int
 * @param int|float $value
 * @return int
 */
function roundUp($value)
{
    return (int)ceil($value);
}

/**
 * Always rounds the given float down to the lowest integer, and casts to int
 * @param int|float $value
 * @return int
 */
function roundDown($value)
{
    return (int)floor($value);
}

/**
 * Normal rounding, but casts to an int instead of float like normal PHP round
 * @param int|float $value
 * @return int
 */
function roundInt($value)
{
    return (int)round($value);
}
