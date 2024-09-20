<?php

namespace App;

use App\Traits\CappuccinoTrait;

class CappuccinoMaker extends CoffeeMaker
{
    use CappuccinoTrait;

    public function makeCappuccino(): void
    {
        echo 'Making cappuccino [UPDATED]' . PHP_EOL;
    }
}