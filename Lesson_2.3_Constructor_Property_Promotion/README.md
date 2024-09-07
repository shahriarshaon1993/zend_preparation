## Lesson 2.3 - Constructor Property Promotion - Null-safe Operator 

### Constructor Property Promotion:

```php
class Transaction 
{
    public function __construct(
       private float $amount,
       private string $description
    ) {
    }
}
```

```php
class Transaction 
{
    public function __construct(
       private float $amount,
       callable $description
    ) {
    }
}
```

> You can set the default value here.

```php
class Transaction 
{
    public function __construct(
       private float $amount,
       private string $description = 'hello'
    ) {
    }
}
```

```php
class Transaction 
{
    public function __construct(
       private float $amount,
       private ?string $description = null
    ) {
    }
}
```

### Null safe Operator 

> Null safe is readonly you can't write or assign value.

```php
$transaction->getCustomer()?->getPaymentProfile()?->id = 12; // Not work
```