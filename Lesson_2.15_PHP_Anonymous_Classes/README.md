## Lesson 2.15 - PHP Anonymous Classes

> Anonymous Classes do not have a class name. also use inheritance
> and extends other classes 

```php
$obj = new class(1, 2, 3)
{
    public function __construct(
        public int $x,
        public int $y,
        public int $z
    ){
    }
};
```

> The main use case for anonymous classes is testing 