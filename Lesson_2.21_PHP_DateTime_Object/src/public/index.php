<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$period = new DatePeriod(
    new DateTime('10/04/2024'),
    new DateInterval('P3D'),
    3
);

foreach ($period as $date) {
    echo $date->format('m/d/Y') . PHP_EOL;
}