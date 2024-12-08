<?php

namespace App\Examples;

class InvoiceQuery extends TableQuery
{
    // cannot override because it's final constant
    public const int DEFAULT_LIMIT = 50;
}