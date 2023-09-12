# Lesson 1.7 - Float Data Type

>> Floating point numbers are numbers that have decimal points

```
$x = 13.5;

OUTPUT:
13.5
```

```
$x = 13.5e3

OUTPUT:
13500
```

```
$x = 13.5e-3

OUTPUT:
0.0135

And the type of $x also float
```

```
PHP_FLOAT_MAX
PHP_FLOAT_MIN
```

```
$x = floor((0.1 + 0.7) * 10);

OUTPUT:
7

Therefore, converting this into a binary internally loses some of the precision. actually equals to this number 7.999999999999999118
floor basically rounds all the numbers down and in this case when applying floor to this number it just removes these entire decimals and we are left with 7
```

## When we are

```
$x = ceil((0.1 + 0.7) * 10);

OUTPUT:
8
```

```
$x = ceil((0.1 + 0.2) * 10);

OUTPUT:
4
This just results in 3 but in reality, this results in 4 and that's because 0.1 plus 0.2 is actually 0.300000000004.
```

>> Basically never trust the floating numbers. to the last digit.

## Compering...

```
$x = 0.23;
$y = 1 - 0.77;

var_dump($x, $y);

OUTPUT:
float(0.23) float(0.23)

if ($x == $y) {
    echo 'YES';
} else {
    echo 'NO';
}

OUTPUT:
NO
```

```
$x = (float) 'awawadf';

var_dump($x);

OUTPUT:
float(0)
```

```
$x = (float) '15.5a';

var_dump($x);

OUTPUT:
float(15.5)
```