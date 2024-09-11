<?php

declare(strict_types=1);

use App\Toaster;
use App\ToasterPro;

require __DIR__ . '/../vendor/autoload.php';

$toaster = new ToasterPro();

$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->toastBagel();