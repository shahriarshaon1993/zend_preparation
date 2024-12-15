<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Attributes\Get;
use App\Enums\Color;
use App\Enums\InvoiceStatus;
use App\Models\Invoice;
use App\View;

class InvoiceController
{
    #[Get("/invoices")]
    public function index(): View
    {
//        var_dump(InvoiceStatus::fromColor(Color::Gray));
//        var_dump(InvoiceStatus::cases());
//        var_dump(enum_exists(InvoiceStatus::class));

        $invoices = (new Invoice())->all(InvoiceStatus::Failed);

        return View::make('invoices/index', ['invoices' => $invoices]);
    }
}