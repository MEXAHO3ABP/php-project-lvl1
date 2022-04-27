<?php

namespace Hexlet\Code\Dop\Functions;

function nod($a, $b)
{
    while ($a != $b) {
        if ($a > $b) {
            $a = $a - $b;
        } else {
            $b = $b - $a;
        }
    }

    return $b;
}