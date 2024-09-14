<?php

namespace App\Agency;

use App\DebtCollector;

class RockyAgency implements DebtCollector
{
    public function collect(float $owedAmount): float
    {
        $guaranteed = ceil($owedAmount * 0.65);

        return mt_rand($guaranteed, $owedAmount);
    }
}