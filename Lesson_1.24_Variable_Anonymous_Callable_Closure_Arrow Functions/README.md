## Lesson 1.24 - Variable, Anonymous, Callable, Closure & Arrow Functions In PHP

### Variables functions

```php
function sum(int|float ...$numbers): int|float
{
    return array_sum($numbers);
}

$x = 'sum';

echo $x(1, 2, 3, 4);

Output:
10
```

### Anonymous functions

> Anonymous functions also known as lambda functions are functions that have no name

```php
$sum = function (int|float ...$numbers): int|float
{
    return array_sum($numbers);
};

echo $sum(1, 2, 3, 4);

Output:
10
```

#### Closure

```php
// In this case we want to access $x.

$x = 1;

$sum = function (int|float ...$numbers) use ($x): int|float
{
    echo $x;
    return array_sum($numbers);
};

echo $sum(1, 2, 3, 4);

// Now it print the $x.

// This type of anonymous function where you can
// access variables out of its local scope is also
// known as the closure

Output:
1 
10
```

### Callable type and callback function

> When a function is passed to another function as an argument and then is
> called within that function it's called a callback function.

```php
$sum = function (callable $callable, int|float ...$numbers): int|float
{
    return $callable(array_sum($numbers));
};

function foo($element) {
    return $element * 2;
}

echo $sum('foo', 1, 2, 3, 4);

Output:
20
```

> callable $callable or closure $callable the difference is that the closure must be
> anonymous function where callable can be normal function.

### Arrow Functions

> Arrow functions were introduced id php version 7.4 and is a cleaner syntax of an
> anonymous function with just a few differences.

> arrow function syntax is especially useful as an inline callback function
> like passing it is an argument to many of the php built-in functions for example:

```php
$array = [1, 2, 3, 4];

$result = array_map(fn($number) => $number * $number, $array);
```

> One of the difference is that you could always access the variables from the parent scope 
> within the arrow functions without the need to use the use keyword for example:

```php
$array = [1, 2, 3, 4];

$y = 5;
$result = array_map(fn($number) => $number * $number + $y, $array);
```