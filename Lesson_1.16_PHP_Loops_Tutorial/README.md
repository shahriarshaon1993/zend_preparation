## Lesson 1.16 - PHP Loops Tutorial - Break & Continue Statements

### PHP While loop:

> The while loop - Loops through a block of code as long as the specified condition is true.

```php
$i = 0;
while ($i <= 15) {
  echo $i++;
}
```

### The break Statement:

> With the break statement we can stop the loop even if the condition is still true:

```php
$i = 0;
while ($i <= 15) {
  if ($i == 3) break;
  echo $i++;
}
```

### The continue Statement

> With the continue statement we can stop the current iteration, and continue with the next:

```php
$i = 0;
while ($i <= 15) {
  if ($i % 2 === 0) continue;
  echo $i++;
}
```

### PHP do while Loop

> The do...while loop will always execute the block of code at least once, it will then check 
> the condition, and repeat the loop while the specified condition is true.

```php
$i = 0;

do {
    $i++;
    echo $i++;
} while ($i < 15);
```

> Note: In a do...while loop the condition is tested AFTER executing the statements within the loop.
> This means that the do...while loop will execute its statements at least once, even if the condition
> is false. See example below.


```php
$i = 25;

do {
    $i++;
    echo $i++;
} while ($i < 15);
```

### PHP for Loop:

> The for loop is used when you know how many times the script should run.

```php
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
```

### PHP foreach Loop

> The foreach loop - Loops through a block of code for each element in an array or each property in an object.

```php
$colors = ["red", "green", "blue", "yellow"];

foreach ($colors as $x) {
  echo "$x <br>";
}
```