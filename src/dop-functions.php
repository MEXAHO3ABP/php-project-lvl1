<?php

namespace Hexlet\Code\Dop\Functions;

function nod(int $num1, int $num2)
{
    while ($num1 != $num2) {
        if ($num1 > $num2) {
            $num1 = $num1 - $num2;
        } else {
            $num2 = $num2 - $num1;
        }
    }

    return $num2;
}
