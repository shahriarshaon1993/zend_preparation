<?php

declare(strict_types=1);

namespace App\Services\Shipping;

class BillableWeightCalculatorService
{
    public function calculate(PackageDimension $dimension, Weight $weight, DimDivisor $dimDivisor): int
    {
        $dimWeight = (int) round(
            $dimension->width * $dimension->height * $dimension->length / $dimDivisor->value
        );

        return max($weight->value, $dimWeight);
    }
}