<?php

declare(strict_types=1);

namespace Tests\DataProviders;

class RouterDateProvider
{
    public static function routeNoteFoundCases(): array
    {
        return [
            ['/users', 'put'],
            ['/invoices', 'post'],
            ['/users', 'get'],
            ['/users', 'post'],
        ];
    }
}