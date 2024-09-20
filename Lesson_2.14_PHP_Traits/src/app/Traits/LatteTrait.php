<?php

namespace App\Traits;

trait LatteTrait
{
    private string $milkType = 'whole-milk';

    public function makeLatte(): void
    {
        echo static::class . ' is making latte with ' . $this->getMilkType() . PHP_EOL;
    }

    public static function foo(): void
    {
        echo 'Foo Bar' . PHP_EOL;
    }

    abstract public function getMilkType(): string;
}