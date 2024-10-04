<?php

declare(strict_types=1);

use App\Customer;
use App\Invoice;

require __DIR__ . '/../vendor/autoload.php';

set_exception_handler(function (\Throwable $e) {
    var_dump($e->getMessage());
});

$invoice = new Invoice(new Customer());

$invoice->process(-25);