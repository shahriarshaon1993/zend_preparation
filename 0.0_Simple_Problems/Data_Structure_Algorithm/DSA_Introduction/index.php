<?php

function test(int $n)
{
    $count = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $count += 1;
        }
    }

    return $count;
}

echo test(5);
