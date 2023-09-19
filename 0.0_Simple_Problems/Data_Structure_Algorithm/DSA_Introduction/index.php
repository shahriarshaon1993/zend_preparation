<?php

function isPrime(int $number): bool
{
    if ($number <= 1) {
        return false;
    }

    $sqrt = sqrt($number);
    for ($i = 2; $i <= $sqrt; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Example
$number = 17;
if (isPrime($number)) {
    echo "{$number} is a prime number.";
} else {
    echo "{$number} is not a prime number.";
}