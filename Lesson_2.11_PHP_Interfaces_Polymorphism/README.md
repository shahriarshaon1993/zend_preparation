## Lesson 2.11 - PHP Interfaces & Polymorphism - Interfaces Explained

### Interfaces:

> Interface is like a contract that define all the necessary actions or methods
> that an object must have

> - All the methods that are declared within the interface must be implemented within the concrete classes.
> - All the methods declared with an interface must be public.
> - You could implement multiple interfaces.
> - You could use extends keyword within an interface to extend multiple interface.

### Polymorphism

```php
class DebtCollectionService
{
    public function collectDebt(DebtCollector $collector)
    {
        $owedAmount = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($owedAmount);

        echo 'Collected $' . $collectedAmount . ' out of $' . $owedAmount . PHP_EOL;
    }
}
```