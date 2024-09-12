<?php

namespace App\Example;

class Rectangle extends Shape
{
    private float $width;
    private float $height;

    public function __construct(string $name, float $width, float $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $width;
    }

    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }
}