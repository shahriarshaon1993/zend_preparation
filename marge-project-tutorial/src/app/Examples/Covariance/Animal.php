<?php

declare(strict_types=1);

namespace App\Examples\Covariance;

abstract class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function speak();

    public function eat(AnimalFood $food): void
    {
        echo $this->name . " eats " . get_class($food);
    }
}