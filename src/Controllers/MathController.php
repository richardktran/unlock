<?php

namespace Khoatran\Unlock\Controllers;

class MathController
{
    public function fibonacci(int $number)
    {
        $f0 = 0;
        $f1 = 1;
        $fn = 1;

        if ($number < 0) {
            return -1;
        } else {
            if ($number == 0 || $number == 1) {
                return $number;
            } else {
                for ($i = 2; $i < $number; $i++) {
                    $f0 = $f1;
                    $f1 = $fn;
                    $fn = $f0 + $f1;
                }
            }
        }
        return $fn;
    }
}
