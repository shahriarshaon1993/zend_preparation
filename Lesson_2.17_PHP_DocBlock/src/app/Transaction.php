<?php

declare(strict_types=1);

namespace App;

/**
 * @method int foo(string $x)
 */
class Transaction
{
    public function __call(string $name, array $arguments)
    {
        // TODO: Implement __call() method.
    }

    public static function __callStatic(string $name, array $arguments)
    {
        // TODO: Implement __callStatic() method.
    }
}