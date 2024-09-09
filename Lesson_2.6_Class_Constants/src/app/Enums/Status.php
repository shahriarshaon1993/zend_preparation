<?php

namespace App\Enums;

class Status
{
    public const string PAID = 'paid';
    public const string PENDING = 'pending';
    public const string DECLINED = 'declined';

    public const array ALL_STATUS = [
        self::PAID => 'Paid',
        self::PENDING => 'Pending',
        self::DECLINED => 'Declined',
    ];
}