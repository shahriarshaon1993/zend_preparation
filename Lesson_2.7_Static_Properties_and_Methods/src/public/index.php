<?php

declare(strict_types=1);

use App\DB;
use App\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction(25, 'Transaction 1');

//var_dump(Transaction::getCount());

$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);