<?php

namespace App\Examples;

class Customer
{
    public function __construct(public Address $address = new Address())
    {
    }
}