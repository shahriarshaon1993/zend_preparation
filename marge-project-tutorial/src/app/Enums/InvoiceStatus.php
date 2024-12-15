<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\SomeInterface;
use App\Traits\InvoiceStatusHelper;

enum InvoiceStatus: int implements SomeInterface
{
    use InvoiceStatusHelper;

    case Pending = 0;
    case Paid = 1;
    case Void = 2;
    case Failed = 3;

//    public const int PENDING = 0;
//    public const int PAID = 1;
//    public const int VOID = 2;
//    public const int FAILED = 3;

//    public static function all(): array
//    {
//        return [
//            self::PENDING,
//            self::PAID,
//            self::VOID,
//            self::FAILED
//        ];
//    }
    public function toString(): string
    {
        return match ($this) {
            self::Paid => 'Paid',
            self::Failed => 'Declined',
            self::Void => 'Void',
            default => 'Pending'
        };
    }

    public function color(): Color
    {
        return match ($this) {
            self::Paid => Color::Green,
            self::Failed => Color::Red,
            self::Void => Color::Gray,
            default => Color::Orange
        };
    }
}
