## Lesson 2.18 - PHP - Object Cloning & Clone Magic Method

```php
class Invoice
{
    private string $id;

    public function __construct()
    {
        $this->id = strtoupper(uniqid('invoice'));
    }

    public function __clone(): void
    {
        $this->id = strtoupper(uniqid('invoice'));
    }
}

$invoice = new \App\Invoice();

$invoice2 = clone $invoice;

var_dump($invoice, $invoice2, $invoice === $invoice2);
```