<?php

declare(strict_types=1);

namespace App;

class Invoice
{
    private int $id = 10;
    private float $amount = 10000;
    private string $accountNumber = '8990213467230987';

    public function __debugInfo(): ?array
    {
        return [
            'id' => $this->id,
            'accountNumber' => '****' . substr($this->accountNumber, -4)
        ];
    }
}