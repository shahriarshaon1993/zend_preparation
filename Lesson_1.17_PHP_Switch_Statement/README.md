## Lesson 1.17 - PHP Switch Statement - Switch vs if/else statement

> The switch statement is used to perform different actions based on different conditions.

```php
$paymentStatus = 'paid';

switch ($paymentStatus) {
    case 'paid':
        echo 'Paid';
        break;
        
    case 'declined':
    case 'rejected':
        echo 'Payment Declined';
        break;
        
    case 'pendding':
        echo 'Pendding Payment';
        break;
        
    default:
        echo 'Unknown Payment Status';
}
```

> Note: the switch statement does the loose comparison. for example if 
> instead of the string representation of the payment statuses, let's say that we
> had integer representation or some kind of numeric representation

```php
$paymentStatus = 1; // working
$paymentStatus = '1'; // working
$paymentStatus = true; // this case is 1

switch ($paymentStatus) {
    case 1:
        echo 'Paid';
        break;
        
    case 2:
    case 3:
        echo 'Payment Declined';
        break;
        
    case 0:
        echo 'Pendding Payment';
        break;
        
    default:
        echo 'Unknown Payment Status';
}
```

> Another thing to note is that when you're using switch statement within the loop
> the break statement here would only break out of this switch statement and note 
> out of the loop

```php
$paymentStatus = [1, 3, 0];

foreach ($paymentStatus as $status) {
    switch ($status) {
        case 1:
            echo 'Paid';
            break;
            
        case 2:
        case 3:
            echo 'Payment Declined';
            break;
            
        case 0:
            echo 'Pendding Payment';
            break;
            
        default:
            echo 'Unknown Payment Status';
    }
}

Output:
Paid
Payment Declined
Pendding Payment
```

> These break statements here are only breaking out of the switch statement.

> The main deference between the switch and if statement is that the expression here.
> switch statement is executed once while the expression within if elseif conditional 
> statements are executed for each statement.

> switch statement is slightly faster than the if statement but don't worry about the 
> performance because it's negligible.