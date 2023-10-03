<?php

function factorial(int $n)
{
    $fact = 1;
    for ($v = 1; $v <= $n; $v++) {
        $fact = $fact * $v;
    }

    return $fact;
}

echo factorial(4);