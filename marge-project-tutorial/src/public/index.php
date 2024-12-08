<?php

declare(strict_types=1);

use App\Examples\Address;
use App\Examples\Customer;
use App\Examples\InvoiceQuery;

require __DIR__ . '/../vendor/autoload.php';

echo InvoiceQuery::DEFAULT_LIMIT;