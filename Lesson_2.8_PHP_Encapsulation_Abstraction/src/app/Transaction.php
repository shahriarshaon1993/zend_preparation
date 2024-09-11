<?php

declare(strict_types=1);

namespace App;

class Transaction
{
    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function process(): void
    {
        echo "Processing $$this->amount transaction";

        $this->generateReceipt();
        
        $this->sendEmail();
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function copyForm(Transaction $transaction): void
    {
        var_dump($transaction->amount, $transaction->sendEmail());
    }

    private function generateReceipt()
    {

    }

    private function sendEmail(): true
    {
        return true;
    }
}