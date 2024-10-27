<?php

declare(strict_types=1);

namespace App\Controllers;

use App\App;
use App\Models\Invoice;
use App\Models\SignUp;
use App\Models\User;
use App\Services\InvoiceService;
use App\View;
use PDO;

class HomeController
{
    public function index(): View
    {
        App::$container->get(InvoiceService::class)->process([], 25);

        return View::make('index');
    }
}