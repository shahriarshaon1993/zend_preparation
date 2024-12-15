<?php

namespace App\Traits;

use App\Enums\Color;
use App\Enums\InvoiceStatus;

trait InvoiceStatusHelper
{
    public static function fromColor(Color $color): InvoiceStatus
    {
        return match ($color) {
            Color::Green => self::Paid,
            Color::Gray => self::Void,
            Color::Red => self::Failed,
            default => self::Pending
        };
    }
}