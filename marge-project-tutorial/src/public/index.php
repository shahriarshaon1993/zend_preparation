<?php

declare(strict_types=1);

use App\Examples\InvoiceQuery;
use App\Examples\SalesTaxCalculator;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$invoice = new InvoiceQuery(new SalesTaxCalculator());

$invoice->create(
    [
        ['description' => 'Item 1', 'quantity' => 1, 'unitPrice' => 15.25],
        ['description' => 'Item 2', 'quantity' => 2, 'unitPrice' => 2],
        ['description' => 'Item 3', 'quantity' => 3, 'unitPrice' => 0.25]
    ]
);