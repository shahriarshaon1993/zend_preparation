## Lesson 2.20 - OOP Error Handling In PHP - Exceptions & Try Catch Finally Blocks

> Exception is simply an object of some exception class that describes an error
> it disrupts the normal flow of the code execution.

```php
class Invoice
{
    public function __construct(public Customer $customer)
    {
    }

    /**
     * @throws \Exception
     */
    public function process(float $amount): void
    {
        if ($amount <= 0) {
            throw new \InvalidArgumentException('Invalid invoice amount');
        }

        if (empty($this->customer->getBillingInfo())) {
            throw new MissingBillingInfoException();
        }

        echo 'Processing $' . $amount . ' invoice - ';

        sleep(1);

        echo 'OK' . PHP_EOL;
    }
}

class Customer
{
    public function __construct(private readonly array $billingInfo = [])
    {
    }

    public function getBillingInfo(): array
    {
        return $this->billingInfo;
    }
}

class MissingBillingInfoException extends \Exception
{
    protected $message = 'Missing billing information';
}

$info = ['name' => 'shahriar', 'age' => 25];

$invoice = new Invoice(new Customer($info));

try {
    $invoice->process(25);
} catch (Exception $e) {
    echo $e->getMessage() . ' ' . $e->getFile() . ' ' . $e->getLine() . PHP_EOL;
}
```

### Finally Blocks

> If the exception was drawn not something to know about the finally block is that 
> if you have a return statement within the try or catch blocks it will return the 
> value after the finally block is executed however if you have the return statement
> within the finally block then both return statements will be executed but the value 
> will be returned from the final block.

```php
var_dump(process());

function process()
{
    $info = ['name' => 'shahriar', 'age' => 25];

    $invoice = new Invoice(new Customer($info));

    try {
        $invoice->process(-25);

        return true;
    } catch (Exception $e) {
        echo $e->getMessage() . ' ' . $e->getFile() . ' ' . $e->getLine() . PHP_EOL;

        return false;
    } finally {
        echo 'Finally block' . PHP_EOL;

        return -1;
    }
}
```

### Global exception handler.

> Most errors are now reported by throwing the error exceptions.
> We have two types of exceptions we have the regular exceptions that
> can be user defined or built in php exceptions and we have error exceptions

```php
set_exception_handler(function (\Throwable $e) {
    var_dump($e->getMessage());
});

$invoice = new Invoice(new Customer());

$invoice->process(25);
```

### Hierarchy of the exceptions in the php2

```text
Throwable (Interface)
├── Error (Class)
│   ├── TypeError (Class)
│   ├── ParseError (Class)
│   ├── AssertionError (Class)
│   └── ArithmeticError (Class)
│        └── DivisionByZeroError (Class)
└── Exception (Class)
├── LogicException (Class)
│   ├── BadFunctionCallException (Class)
│   │   └── BadMethodCallException (Class)
│   ├── DomainException (Class)
│   ├── InvalidArgumentException (Class)
│   ├── LengthException (Class)
│   └── OutOfRangeException (Class)
└── RuntimeException (Class)
├── OutOfBoundsException (Class)
├── OverflowException (Class)
├── RangeException (Class)
├── UnderflowException (Class)
└── UnexpectedValueException (Class)
```