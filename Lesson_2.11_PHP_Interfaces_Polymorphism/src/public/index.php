<?php

declare(strict_types=1);

use App\Agency\DeoAgency;
use App\Agency\PandaAgency;
use App\Agency\RockyAgency;
use App\DebtCollectionService;

require __DIR__ . '/../vendor/autoload.php';

$service = new DebtCollectionService();

$service->collectDebt(new DeoAgency());