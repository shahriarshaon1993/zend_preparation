<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Attributes\Route;
use App\Models\Ticket;
use Generator;

class GeneratorController
{
    public function __construct(private Ticket $ticket){}

    #[Route('/generator')]
    public function index(): void
    {
        // After using generator
        foreach ($this->ticket->all() as $ticket) {
            echo $ticket['id'] . ": " . substr($ticket['description'], 0, 15) . "<br/>";
        }
    }

    private function lazyRange(int $start, int $end): Generator
    {
        for ($i = $start; $i <= $end; $i++) {
            yield $i * 5 => $i;
        }
    }
}