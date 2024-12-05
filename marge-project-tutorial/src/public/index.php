<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

function foo(): never
{
    echo 1;
    exit;
}

foo();

echo 'I should *never* be printed';