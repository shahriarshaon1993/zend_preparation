## Lesson 2.4 - PHP Namespace Tutorial

### Namespace

> When you define a function a constant or a class without a namespace 
> definition by default they will be put in global space

### Aliasing

```php
use PaymentGateway\Paddle\Transaction;
use PaymentGateway\Stripe\Transaction as StripeTransaction; // Aliasing

$paddle = new Transaction();
$stripe = new StripeTransaction(); // Aliasing

var_dump($stripe);
var_dump($paddle->getTime());
```