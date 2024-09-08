<?php

declare(strict_types=1);

use Ramsey\Uuid\UuidFactory;
use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$id = new UuidFactory();

echo $id->uuid4();

$paddleTransaction = new Transaction();

var_dump($paddleTransaction);