<?php

namespace App\Controllers;

use App\Container;
use App\Services\InvoiceService;
use App\View;

class AboutController
{
    public function __construct(private InvoiceService $invoiceService)
    {}

    public function index(): View
    {
        $this->invoiceService->process([], 25);

        return View::make('about/index');
    }
}