<?php

declare(strict_types=1);

namespace App\Controllers;


use App\Services\InvoiceService;
use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class InvoiceController
{
    public function __construct(
        private InvoiceService $invoiceService
    ) {
    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function index(Request $request, Response $response, $args): Response
    {
        return Twig::fromRequest($request)->render(
            $response,
            'invoices/index.twig',
            ['invoices' => $this->invoiceService->getPaidInvoice()]
        );
    }
}