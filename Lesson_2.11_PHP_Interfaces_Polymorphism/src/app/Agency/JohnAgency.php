<?php

namespace App\Agency;

use App\DebtCollector;

class JohnAgency implements DebtCollector
{
    public function collect(float $owedAmount): float
    {
        $guaranteed = ceil($owedAmount * 0.85);

        return mt_rand($guaranteed, $owedAmount);
    }
}