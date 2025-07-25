<?php

namespace MenyongMenying\MLibrary\Kucil\Utilities\MInteger\Contracts;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
interface MIntegerInterface
{
    /**
     * Mengecek apakah nilai bertipe data 'Integer'.
     * @param  mixed     $integer Nilai yang akan dicek.
     * @return null|bool          Hasil pengecekan.
     */
    public function isInteger(mixed $integer) :null|bool;

    /**
     * Mengubah integer menjadi bertipe data 'String'.
     * @param  int         $integer Integer yang akan diubah menjadi string.
     * @return null|string          String dari $integer.
     */
    public function convertToString(int $integer) :null|string;

    /**
     * Mengubah integer menjadi bertipe data 'Float'.
     * @param  int        $integer Integer yang akan diubah menjadi float.
     * @return null|float          Float dari $integer.
     */
    public function convertToFloat(int $integer) :null|float;

    /**
     * Mengubah integer menjadi bertipe data 'Boolean'. 
     * @param  int       $integer Integer yang akan diubah menjadi boolean.
     * @return null|bool          Boolean dari $integer.
     */
    public function convertToBoolean(int $integer) :null|bool;
}
