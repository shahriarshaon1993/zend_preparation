## Lesson 1.28 - PHP Error Handling & Error Handlers

```php
function errorHandler(int $type, string $msg, ?string $file = null, ?int $line = null) 
{
    echo $type . ': ' . $msg . ' in' . $file . ' on line' . $line;
    
    exit;   
}

//error_reporting(E_ALL & ~E_WARNING);

set_error_handler('errorHandler', E_ALL);

echo $x;
```