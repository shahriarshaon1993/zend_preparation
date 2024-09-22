## Lesson 2.17 - PHP DocBlock - Adding Comments to Classes & Methods

> Docblock is a multi line comment that can be added to functions, methods,
> classes, interfaces, variables, properties and so on.

```php
/*
 * Docblock
 * 
 * @param
 * @return
 */
```

```php
class Transaction
{
    /**
     * some description
     *
     * @param Customer $customer
     * @param float $amount
     *
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     *
     * @return bool
     */
    public function process(Customer $customer, float $amount): bool
    {
        return $customer->name === 'shaon';
    }
}
```

```php
class Transaction
{
    /** @var Customer */
    private $customer;

    /** @var float */
    private $amount;
}
```

> This @var tag is especially useful when working with loops if you're looping
> over a collection or array of object where each element is an object of some 
> class you can type hint that using the @var tag and then ides like phpstorm
> will autocomplete properties and methods that are available on that object.

```php
class Transaction
{
    /** @var Customer */
    private $customer;

    /** @var float */
    private $amount;

    public function foo(array $arr)
    {
        /** @var Customer $obj */
        foreach ($arr as $obj) {
            $obj->name;
        }
    }
}
```

```php
/**
 * @property $x
 * @property-write $y
 */
class Transaction
{
    public function __get(string $name)
    {
        // TODO: Implement __get() method.
    }

    public function __set(string $name, $value): void
    {
        // TODO: Implement __set() method.
    }
}
```

```php
/**
 * @method int foo(string $x)
 */
class Transaction
{
    public function __call(string $name, array $arguments)
    {
        // TODO: Implement __call() method.
    }

    public static function __callStatic(string $name, array $arguments)
    {
        // TODO: Implement __callStatic() method.
    }
}
```