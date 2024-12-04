<?php

namespace App\Examples;

class Invoice
{
    public function __destruct()
    {
        echo 'Invoice Destructor' . PHP_EOL;
    }
}