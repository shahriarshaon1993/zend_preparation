<?php

declare(strict_types=1);

use App\Examples\Payment;
use App\Examples\PaymentStatus;

require __DIR__ . '/../vendor/autoload.php';

$payment = new Payment();

$payment->updateStatus(PaymentStatus::PAID);

echo $payment->status()->text() . PHP_EOL;