## Lesson 1.18 - PHP Match Expression - Match vs Switch

> The match expression is pretty much the same as the switch statement
> with just a few differences also the match expression introducing php8
> that is a key value pairs

```php
$status = 1;

$result = match ($status) {
    1 => 'Paid',
    2,3 => 'Payment declined',
    0 => 'Pendding Payment',
    default => 'Unknown Payment Status'
}

echo $result;

Output:
Paid
```

### Difference between switch and match

> Diff 1: Match expression actually is an expression, and it evaluates to a value
> and therefore it can be assigned to a variable

> Diff 2: Within the switch statement you need to use break statement to avoid some 
> unexpected results. With the match expression that does not happen the match expression
> will just return that one value once the match is found, and it will not fail.

> Diff 3: In the switch statement the default is not required. you have to specify all the
> possible cases here if you don't specify all possible cases, and you have to specify the default

> Diff 3: The match expression does strict comparison while the switch statement does the loose comparison