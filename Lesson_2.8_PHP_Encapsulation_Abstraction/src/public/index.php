<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Transaction;

$transaction = new Transaction(25);

$transaction->copyForm(new Transaction(100));

$transaction->process();