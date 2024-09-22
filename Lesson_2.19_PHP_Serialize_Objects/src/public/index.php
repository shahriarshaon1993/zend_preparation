<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$invoice = new \App\Invoice(25, 'Invoice 1', 'INVOICE67888377');

$str = serialize($invoice);
$invoice2 = unserialize($str);

//echo $str . PHP_EOL;
var_dump($invoice2);
