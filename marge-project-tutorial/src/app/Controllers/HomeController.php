<?php

declare(strict_types=1);

namespace App\Controllers;

use App\App;
use App\Container;
use App\Services\InvoiceService;
use App\View;

class HomeController
{
    public function index(): View
    {
        return View::make('index');
    }
}