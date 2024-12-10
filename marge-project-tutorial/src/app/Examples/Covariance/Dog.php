<?php

declare(strict_types=1);

namespace App\Examples\Covariance;

class Dog extends Animal
{
    public function speak(): void
    {
        echo $this->name . " barks" . PHP_EOL;
    }

    public function eat(Food $food): void
    {
        echo $this->name . " eats " . get_class($food);
    }
}