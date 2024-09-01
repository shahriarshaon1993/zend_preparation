## Lesson 1.23 - PHP Variable Scopes - Static Variables

### Variable Scopes

```php
$x = 5; // it is in a global scope

include 'file.php' // $x access to be file.php
```

```php
function foo() {
    $x = 3; // local scope
    
    return $x;
}
```

### Static variable

```php
function getValue() {
    static $value = null;
    
    if ($value === null) {
        $value = someVeryExpensiveFunction();
    }
    
    return $value;
}

function someVeryExpensiveFunction() {
    sleep(2);
    
    echo 'processing...';
    
    return 10;
}

getValue();
```

> Static variable can be useful to cache things like this