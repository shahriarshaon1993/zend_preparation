<?php

declare(strict_types=1);

require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';

use PaymentGateway\Paddle\Transaction;
use PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddle = new Transaction();
$stripe = new StripeTransaction();

var_dump($stripe);
var_dump($paddle->getTime());