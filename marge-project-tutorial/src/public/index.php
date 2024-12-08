<?php

declare(strict_types=1);

use App\Examples\Address;
use App\Examples\Customer;

require __DIR__ . '/../vendor/autoload.php';

$customer = new Customer(new Address());

var_dump($customer->address);