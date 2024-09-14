<?php

namespace App\Agency;

use App\DebtCollector;

class DeoAgency implements DebtCollector
{
    public function collect(float $owedAmount): float
    {
        $guaranteed = ceil($owedAmount * 0.45);

        return mt_rand($guaranteed, $owedAmount);
    }
}