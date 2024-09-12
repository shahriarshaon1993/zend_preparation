<?php

namespace App\Example;

class Circle extends Shape
{
    private string $radius;

    public function __construct(string $name, float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}