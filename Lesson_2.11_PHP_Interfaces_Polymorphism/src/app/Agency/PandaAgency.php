<?php

namespace App\Agency;

use App\DebtCollector;

class PandaAgency implements DebtCollector
{

    public function collect(float $owedAmount): float
    {
        $guaranteed = ceil($owedAmount * 0.5);

        return mt_rand($guaranteed, $owedAmount);
    }
}