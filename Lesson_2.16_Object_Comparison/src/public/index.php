<?php

//declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$invoice1 = new \App\Invoice(25, 'My Invoice');
$invoice2 = new \App\Invoice(25, 'My Invoice');

$invoice3 = $invoice1;

echo '$invoice1 == $invoice2' . PHP_EOL;
var_dump($invoice1 == $invoice3);

echo '$invoice1 === $invoice2' . PHP_EOL;
var_dump($invoice1 === $invoice3);
