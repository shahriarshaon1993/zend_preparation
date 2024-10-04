<?php

namespace App;

class Customer
{
    public function __construct(private readonly array $billingInfo = [])
    {
    }

    public function getBillingInfo(): array
    {
        return $this->billingInfo;
    }
}