<?php

namespace App\Example;

abstract class Shape
{
    public function __construct(private readonly string $name)
    {
    }

    abstract public function calculateArea(): float;

    public function getName(): string
    {
        return $this->name;
    }
}