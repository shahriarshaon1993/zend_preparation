<?php

declare(strict_types=1);

namespace App\Examples;

use function PHPUnit\Framework\matches;

enum PaymentStatus
{
    case PAID;
    case VOID;
    case DECLINED;

    public function text(): string
    {
        return match($this) {
            self::PAID => 'Paid',
            self::VOID => 'Void',
            self::DECLINED => 'Declined',
        };
    }
}