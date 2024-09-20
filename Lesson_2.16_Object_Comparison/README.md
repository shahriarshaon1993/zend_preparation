## Lesson 2.16 - PHP Variable Storage & Object Comparison - Zend Value (zval)

### Object Comparison

```php
$invoice1 = new \App\Invoice(25, 'My Invoice');
$invoice2 = new \App\Invoice(25, 'My Invoice');

$invoice3 = $invoice1;

echo '$invoice1 == $invoice2' . PHP_EOL;
var_dump($invoice1 == $invoice3);

echo '$invoice1 === $invoice2' . PHP_EOL;
var_dump($invoice1 === $invoice3);

```