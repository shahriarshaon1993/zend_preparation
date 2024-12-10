<?php

declare(strict_types=1);

use App\Examples\Covariance\AnimalFood;
use App\Examples\Covariance\CatShelter;
use App\Examples\Covariance\DogShelter;
use App\Examples\Covariance\Food;

require __DIR__ . '/../vendor/autoload.php';

$kitty = (new CatShelter())->adopt("Ricky");
$kitty->speak();

echo PHP_EOL;

$catFood = new AnimalFood();
$kitty->eat($catFood);

echo PHP_EOL;

$doggy = (new DogShelter())->adopt("Mavrick");
$doggy->speak();

echo PHP_EOL;

$banana = new Food();
$doggy->eat($banana);

echo PHP_EOL;