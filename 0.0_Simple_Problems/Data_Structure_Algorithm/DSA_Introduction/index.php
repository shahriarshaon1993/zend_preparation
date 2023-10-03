<?php

function findSum(int $num): float
{
    return $num * ($num + 1) / 2;
}

echo findSum(9999999);
