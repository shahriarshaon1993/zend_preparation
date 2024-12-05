<?php

declare(strict_types=1);

use App\Examples\Address;

require __DIR__ . '/../vendor/autoload.php';

$address = new Address(
    '123 Main St',
    'New York',
    'NY',
    '10011',
    'US'
);

echo $address->street . PHP_EOL;