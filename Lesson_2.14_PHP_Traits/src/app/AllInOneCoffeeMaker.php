<?php

namespace App;

use App\Traits\CappuccinoTrait;
use App\Traits\LatteTrait;

class AllInOneCoffeeMaker extends CoffeeMaker
{
    use CappuccinoTrait, LatteTrait;

    public function getMilkType(): string
    {
        return 'Cow milk';
    }
}