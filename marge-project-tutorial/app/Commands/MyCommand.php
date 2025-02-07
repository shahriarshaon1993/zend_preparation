<?php

declare(strict_types=1);

namespace App\Commands;

use App\Services\InvoiceService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

// the name of the command is what users type after "php bin/console"
#[AsCommand(
    name: 'app:my-command',
    description: 'This is custom command.'
)]
class MyCommand extends Command
{
    public function __construct(private readonly InvoiceService $invoiceService)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->write('Paid Invoices = ' . count($this->invoiceService->getPaidInvoice()), true);

        return Command::SUCCESS;
    }
}