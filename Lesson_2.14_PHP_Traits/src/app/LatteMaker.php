<?php

namespace App;

use App\Traits\LatteTrait;

class LatteMaker extends CoffeeMaker
{
    use LatteTrait;

    private string $milkType = 'whole-milk';

    public function getMilkType(): string
    {
        return $this->milkType;
    }
}