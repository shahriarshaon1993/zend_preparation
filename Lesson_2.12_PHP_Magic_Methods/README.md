## Lesson 2.12 - What Are PHP Magic Methods & How They Work

> Magic methods are special methods that override php's default behavior when
> certain event or action is performed on an object.

> PHP reserves any methods defined with double underscores.

### __get() method

> The __get() method is particularly useful in scenarios where you want to dynamically
> access properties of an object without explicitly defining all possible properties
> in advance. Common use cases include:

### __set() method

> The __set() magic method gives you control over how and when properties are set. 
> It's particularly useful when working with flexible data structures, encapsulation,
> and validation in PHP classes.

```php
class Invoice
{
    protected float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }

        return null;
    }

    public function __set(string $name, $value): void
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }
}
```

### __isset() and __unset() method.

> The __isset method gets called when you use isset or empty function on 
> undefined or inaccessible properties and __isset method gets called when 
> you use the unset function. on undefined or inaccessible properties

### __call() and __callStatic() method.

### __toString method.

> The PHP magic method __toString() allows you to define how an object should
> be represented as a string. When an object is treated like a string (e.g., when
> passed to echo, print, or string concatenation), the __toString() method is 
> automatically called.

```php
class Product 
{
    private $name;
    private $price;

    public function __construct($name, $price) 
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function __toString() 
    {
        return "Product: $this->name, Price: $this->price";
    }
}

$product = new Product("Laptop", 1500);

// Logging object information to a file
file_put_contents('log.txt', $product);
// The __toString() method is called, and the string representation is written to the file.
```

### __invoke() method.

> __invoke() method gets triggered when you try to call the object directly. this magic
> method is very useful to implement single action classes.

### __debugInfo() method.

```php
class Invoice
{
    private int $id = 10;
    private float $amount = 10000;
    private string $accountNumber = '8990213467230987';

    public function __debugInfo(): ?array
    {
        return [
            'id' => $this->id,
            'accountNumber' => '****' . substr($this->accountNumber, -4)
        ];
    }
}

$invoice = new \App\Invoice();

var_dump($invoice);
```