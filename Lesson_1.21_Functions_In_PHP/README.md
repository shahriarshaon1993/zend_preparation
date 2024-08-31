## Lesson 1.21 | 1.22 - How To Create Functions In PHP - Functions Tutorial

> PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

### PHP User Defined Functions

> - A function is a block of statements that can be used repeatedly in a program.
> - A function will not execute automatically when a page loads.
> - A function will be executed by a call to the function.

```php
function foo() {
    echo 'Hello World';
}

foo();

Output:
Hello World
```

```php
function foo() {
    return 'Hello World';
}

echo foo();

Output:
Hello World
```

> The return statement is optional if you don't use it or don't specify the value to return
> the null value will be return by default.

```php
function foo() {
    return;
}

echo foo();

Output:
null
```

```php
function foo() {}

echo foo();

Output:
null
```

### Define function parameters and arguments

```php
function foo($x, $y) { // --> Parameter
    return $x * $y;
}

foo(5, 10) // --> Argument
```

```php
function sum(...$numbers) {
    return array_sum($numbers);
}

sum(5, 2, 3)

Output:
10
```

```php
function sum($a, $b, ...$numbers) {
    return $a + $b + array_sum($numbers);
}

$a = 10;
$b = 20;

sum($a, $b, 5, 2, 3)

Output:
40
```

```php
function sum($a, $b, ...$numbers) {
    return $a + $b + array_sum($numbers);
}

$a = 10;
$b = 20;
$numbers = [5, 2, 3];

sum($a, $b, ...$numbers) // ...$numbers called unpacked array

Output:
40
```
### Named Argument

```php
function foo(int $a, int $b): int {
    if ($a % $b === 0) {
        return $a / $y;
    }

    return $a;
}

$a = 6;
$b = 3;

foo(b: $b, a: $a);
```

```php
function foo(int $a, int $b): int {
    if ($a % $b === 0) {
        return $a / $y;
    }

    return $a;
}

$arr = ['a' => 2, 'b' => 3];

foo(...$arr);
```