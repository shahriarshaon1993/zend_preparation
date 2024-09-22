<?php

namespace App;

class Invoice
{
    private string $id;

    public function __construct()
    {
        $this->id = strtoupper(uniqid('invoice'));
    }

    public function __clone(): void
    {
        $this->id = strtoupper(uniqid('invoice'));
    }
}