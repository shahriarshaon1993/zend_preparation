<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Ticket;
use Generator;

class GeneratorController
{
    public function __construct(private Ticket $ticket)
    {
    }

    public function index(): void
    {
//        $numbers = $this->lazyRange(1, 1);

//        echo $numbers->current();
//
//        $numbers->next();
//        echo $numbers->current();
//
//        $numbers->next();
//        echo $numbers->getReturn();

//        foreach ($numbers as $key => $number) {
//            echo $key . ": " . $number . "<br/>";
//        }


        // Applying in database
//        echo '<pre>';
//        print_r($this->ticket->all());
//        echo '</pre>';

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