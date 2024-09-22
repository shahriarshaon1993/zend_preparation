<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$transaction = new \App\Transaction();

var_dump($transaction->process(new \App\Customer(), 230));