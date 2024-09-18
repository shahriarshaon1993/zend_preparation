<?php

namespace App;

class ClassA
{
    protected static string $name = 'A';

    public static function getName(): string
    {
        return static::$name;
    }

    public static function make(): static
    {
        return new static();
    }
}