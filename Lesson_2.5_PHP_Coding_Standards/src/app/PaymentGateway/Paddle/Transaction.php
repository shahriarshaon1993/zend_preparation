<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

class Transaction
{
    public function __construct()
    {
//        var_dump(new \DateTime());
    }

    public function getTime(): \DateTime
    {
        return new \DateTime();
    }
}