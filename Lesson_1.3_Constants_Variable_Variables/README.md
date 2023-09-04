## Lesson 1.3 - Constants & Variable Variables

## Constants:

>> For the constants though once you define them you can not override or change the value. there are two ways to define constants by using a function called define. The define accepts two parameters first one is name and the second one is value.

```
define('name', 'value');
```

>> Now ignore the third parameter here which basically allows you to set true or false whether your constant name is case-sensitive or not this has been deprecated and you should not use it.

>> The name of the constants follows the same rules as the variables. you define constants with all uppercase and you should just stick.

```
define('STATUS_PAID', 'paid');

echo STATUS_PAID;
```

>> You cannot change the value of the constant.

```
define('STATUS_PAID', 'paid');
define('STATUS_PAID', 1);
echo STATUS_PAID;
```

>> This will give an error

```
Warning: Constant STATUS_PAID already defined in D:\SHAON\tools\laragon\www\zend_preparation\Lesson_1.3_Constants_Variable_Variables\index.php on line 4 
paid
```

>> You could also check if a constant has been defined using the defined function

```
echo define('STATUS_PAID');
```

>> And they will print 1. This basically returns a boolean true and false.

## Using const Keyword

>> Another way to define constants is using the const keyword.

```
const STATUS_PAID = 'paid';
echo STATUS_PAID;
```

>> The main difference between the define function and the const keyword is that constants created with the const keyword are actually defined at a compile time while constants created with the define function are defined at a run time.

>> So you can't define constants with the const keyword within your control structures like loops or if-else.

```
if (true) {
    define('STATUS_PAID', 'paid');
}

This would works.
```

```
if (true) {
    const STATUS_PAID = 'paid';
}

This will not work.
```

## Dynamic Constant Name:

```
$paid = 'PAID'

define('STATUS_' . $paid, $paid);

echo STATUS_PAID;
```

## When use constants:

>> When would you use constants whenever you have some static data that doesn't change too often.

### Example: 
```
Status Paid, Status Void, Status Pending
```

## Predefined Constants: 
[Predefined Constants PHP Documentation]([https://www.php.net/manual/en/com.constants.php](https://www.php.net/manual/en/reserved.constants.php))

## Magic constants
[Magic constants PHP Documentation](https://www.php.net/manual/en/language.constants.magic.php)

## Variable Variables:

```
$foo = 'bar';
$$foo = 'baz';

echo $foo, $bar;
OR
echo $foo, ${$foo};
```
