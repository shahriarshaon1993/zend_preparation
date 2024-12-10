<?php

declare(strict_types=1);

namespace App\Examples\Covariance;

class Cat extends Animal
{
    public function speak(): void
    {
        echo $this->name . " meows" . PHP_EOL;
    }

    public function eat(Food $food): void
    {
        echo $this->name . " eats " . get_class($food);
    }
}