<?php

declare(strict_types=1);

use App\Services\Shipping\BillableWeightCalculatorService;
use App\Services\Shipping\DimDivisor;
use App\Services\Shipping\PackageDimension;
use App\Services\Shipping\Weight;

require __DIR__ . '/../vendor/autoload.php';

$package = [
    'weight' => 6,
    'dimensions' => [
        'width' => 9,
        'length' => 15,
        'height' => 7,
    ]
];

$fedexDimDivisor = 139;

$packageDimensions = new PackageDimension(
    $package['dimensions']['width'],
    $package['dimensions']['height'],
    $package['dimensions']['length'],
);

$weight = new Weight($package['weight']);

$billableWeightService = new BillableWeightCalculatorService();

$widerPackageDimensions = $packageDimensions->increaseWidth(10);

$billableWeight = $billableWeightService->calculate(
    $packageDimensions,
    $weight,
    DimDivisor::FEDEX
);

$widerPackageBillableWeight = $billableWeightService->calculate(
    $widerPackageDimensions,
    $weight,
    DimDivisor::FEDEX
);

echo $billableWeight . ' LB' . PHP_EOL;
echo $widerPackageBillableWeight . ' LB' . PHP_EOL;