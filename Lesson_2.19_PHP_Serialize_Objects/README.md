## Lesson 2.19 - PHP Serialize Objects & Serialize Magic Methods

### Serialize:

> Serialize is simply a process of converting a value in a string form.
> you can serialize pretty much any value that can be store in php including
> objects but cannot serialize resource types or closures as well as some of
> built in php objects.

```php
echo serialize(true) . PHP_EOL;
echo serialize(2) . PHP_EOL;
echo serialize(2.5) . PHP_EOL;
echo serialize('hello world') . PHP_EOL;
echo serialize([1, 2, 3]) . PHP_EOL;
echo serialize(['a' => 1, 'b' => 2, 'c' => 3]) . PHP_EOL;
```

```php
var_dump(unserialize(serialize(['a' => 1, 'b' => 2, 'c' => 3])));
```

```php
class Invoice
{
    public string $id;

    public function __construct()
    {
        $this->id = strtoupper(uniqid('invoice'));
    }
}

var_dump(serialize($invoice));

var_dump(unserialize('O:11:"App\Invoice":1:{s:2:"id";s:20:"INVOICE66F058638DE0F";}'));
```

> Note: When you unserialize an object it actually creates a new object which means
> it will not point to the same location in the memory as the original object.

```php
$invoice = new \App\Invoice();

$str = serialize($invoice);  

$invoice2 = unserialize($str);

var_dump($invoice, $invoice2, $invoice === $invoice2);
```

```php
class Invoice
{
    public string $id;

    public function __construct(
        public float  $amount,
        public string $description,
        public string $creditCard,
    )
    {
        $this->id = strtoupper(uniqid('invoice'));
    }

    public function __sleep(): array
    {
        return ['id', 'description'];
    }

    public function __wakeup(): void
    {
        // TODO: Implement __wakeup() method.
    }
}

$invoice = new \App\Invoice(25, 'Invoice 1', 'INVOICE67888377');

echo serialize($invoice) . PHP_EOL;
```

> Note: You should never ever pass untrusted data in unserialize() function. this
> can be exploited and unintended code. it will return false. it will issue notice error.

> The serialized and unserialized magic methods solve some of the limitations and problems
> that come with the sleep and weak up magic methods as well as the serializable interface.
> so you can think of to serialize and unserialize magic methods as a combination of sleep
> weakup and serializable interface. the serialized magic method gets called prior to the 
> serialization just like the sleep magic method, and it also returns an array. the differance
> between the sleep and serialize is that the sleep method must return the names of the properties
> that should be serialized while serialize magic method must return an array that represent the
> object, and it can be a associative array of key value pairs and contain additional information
> other than the current properties, so you're not limited to just the properties like your limited
> in the sleep method. you have full control over how your object is serialized.

```php
class Invoice
{
    public string $id;

    public function __construct(
        public float  $amount,
        public string $description,
        public string $creditCard,
    )
    {
        $this->id = strtoupper(uniqid('invoice'));
    }

    public function __serialize(): array
    {
        return [
            'id' => $this->id,
            'amount' => $this->amount,
            'description' => $this->description,
            'creditCard' => base64_encode($this->creditCard),
            'foo' => 'bar'
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->id = $data['id'];
        $this->amount = $data['amount'];
        $this->description = $data['description'];
        $this->creditCard = base64_decode($data['creditCard']);
    }
}

$invoice = new \App\Invoice(25, 'Invoice 1', 'INVOICE67888377');

$str = serialize($invoice);
$invoice2 = unserialize($str);

//echo $str . PHP_EOL;
var_dump($invoice2);
```