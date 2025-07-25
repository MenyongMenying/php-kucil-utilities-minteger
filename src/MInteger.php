<?php

namespace MenyongMenying\MLibrary\Kucil\Utilities\MInteger;

use MenyongMenying\MLibrary\Kucil\Utilities\MInteger\Contracts\MIntegerInterface;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-20
 */
final class MInteger implements MIntegerInterface
{
    public function isInteger(mixed $integer) :null|bool
    {
       return is_int($integer); 
    }

    public function convertToString(int $integer) :null|string
    {
        return (string) $integer;
    }

    public function convertToFloat(int $integer) :null|float
    {
        return (float) $integer;
    }

    public function convertToBoolean(int $integer) :null|bool
    {
        return match($integer) {
            0 => false,
            1 => true,
            default => null
        };
    }
}
