<?php

namespace App\Examples;

readonly class Address
{
    public function __construct(
        public string $street,
        public string $city,
        public string $state,
        public string $zip,
        public string $country
    ) {
    }
}