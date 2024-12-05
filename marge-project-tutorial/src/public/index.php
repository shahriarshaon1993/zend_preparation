<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

function sum(float ...$numbers): float
{
    return array_sum($numbers);
}

//$closure = Closure::fromCallable('sum');
$closure = sum(...);

var_dump($closure);

echo $closure(2, 5) . PHP_EOL;