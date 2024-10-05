## Lesson 2.22 - PHP Iterators & Iterable Type - Iterate Over Objects

```php
foreach (['a', 'b', 'c', 'd', 'e'] as $key => $value) {
    echo $key . ' = ' . $value . PHP_EOL;
}
```

> As you know we can iterate over arrays for example we can use the foreach
> loop to iterate over this array and print its keys and values. we can also
> iterate over objects in php using foreach loop and by default it will iterate
> over all the visible or accessible properties of the object.

```php
class Invoice
{
    public string $id;

    public function __construct(public float $amount)
    {
        $this->id = random_int(10000, 9999999);
    }
}

foreach (new \App\Invoice(25) as $key => $value) {
    echo $key . ' = ' . $value . PHP_EOL;
}
```

> An Iterator is an interface that requires implementing 5 methods:
> - current(): Returns the current element.
> - next(): Moves the cursor to the next element.
> - key(): Returns the key of the current element.
> - valid(): Checks if the current position is valid.
> - rewind(): Rewinds the iterator to the first element.

```php
class Invoice
{
    public string $id;

    public function __construct(public float $amount)
    {
        $this->id = random_int(10000, 9999999);
    }
}

class InvoiceCollection implements \Iterator
{
    private int $key;

    public function __construct(public array $invoices){}

    public function current(): mixed
    {
        echo __METHOD__ . PHP_EOL;

        return $this->invoices[$this->key];
    }

    public function next(): void
    {
        echo __METHOD__ . PHP_EOL;

        ++$this->key;
    }

    public function key(): mixed
    {
        echo __METHOD__ . PHP_EOL;

        return $this->key;
    }

    public function valid(): bool
    {
        echo __METHOD__ . PHP_EOL;

        return isset($this->invoices[$this->key]);
    }

    public function rewind(): void
    {
        echo __METHOD__ . PHP_EOL;

        $this->key = 0;
    }
}

$invoiceCollection = new InvoiceCollection([
    new Invoice(15),
    new Invoice(25),
    new Invoice(50)
]);

foreach ($invoiceCollection as $invoice) {
    echo $invoice->id . ' = ' . $invoice->amount . PHP_EOL;
}
```

### IteratorAggregate:

> Basically if you're working with simple arrays and need the ability to 
> iterate over your objects that contain the array property iterate aggregate
> might be better since you only need to implement a single method but if you
> need more control, and you are not iterating over simple arrays then you probably
> need iterator interface instance instead.

```php
class InvoiceCollection implements \IteratorAggregate
{
    public function __construct(public array $invoices){}

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->invoices);
    }
}
```

### Type Hinting:

```php
foo($invoiceCollection);
foo([1, 2, 3, 4, 5]);

function foo(iterable $iterable): void
{
    foreach ($iterable as $i => $item) {
        echo $i . PHP_EOL;
    }
}
```

### Use Cases of Iterators and Iterable Types

```text
1. Custom Collection Classes:
When you need to build a custom data structure (like a collection or stack) and want to 
iterate through it easily using a foreach loop, implementing the Iterator interface can 
help make your class traversable.

2. File or Database Record Iteration:
Iterators are especially useful when dealing with large data sets (like reading files or database records)
because you can lazily load each record one by one without loading everything into memory at once.
 
3. Lazy Loading Large Datasets:
Iterators allow for lazy evaluation, meaning data is loaded on demand. This is especially beneficial when 
working with large datasets, preventing memory exhaustion by only loading data when needed.
```