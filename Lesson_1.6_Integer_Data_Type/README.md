# Lesson 1.6 - Integer Data Type

>> Integers are numbers without any decimal points like 1 2 3 0 negative 5 and so on.

```
echo PHP_INT_MAX  . PHP_EOL;
echo PHP_INT_MIN . PHP_EOL;
echo PHP_INT_SIZE . PHP_EOL;

OUTPUT:
9223372036854775807
-9223372036854775808
8
```

>> Integers can be specified in decimal or Base 10

```
$x = 5;

OUTPUT:
5
```

>> Hexadecimal Base 16 - prefix 0x

```
$x = 0x2A;

OUTPUT:
42
```

>> Octal numbers - prefix 0

```
$x = 055;

OUTPUT:
45
```

>> Binary numbers - prefix 0b

```
$x = 0b11;

OUTPUT:
3
```

```
$x = (int) 5.98;

OUTPUT:
5
```

```
$x = (int) '87awawwdd';

OUTPUT:
87
```

```
$x = (int) 'text';

OUTPUT:
0
```

```
$x = (int) null;

OUTPUT:
0
```

>> way could check if the variable is an integer is_int(). that will return true or false integer or not.
