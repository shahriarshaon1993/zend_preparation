## Lesson 1.11 - What Are Expressions In PHP & How They Are Evaluated.

```php
$x = 5;

$y = $x;
```

> You can see pretty much anything after the assignment operator is considered an expression.
> Because it evaluated to some kind of value and that value can be of any data type it could be
> booleans, integer, floats, arrays, objects and so on.

```php
$z = $x === $y;
```

> "$x === $y" this right here is an expression because this evaluates to a boolean value
> functions are also considered expressions because typically they return value

```php
$x = sum($x, $y);
```

> "sum($x, $y)" this also an expressions.

```php
if ($x < 5) {
    echo 'Hello';
}
```

> "$x < 5" this right here is an expressions because it evaluates to boolean value.