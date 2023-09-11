# Lesson 1.4 - Data Types & Casting

>> PHP is dynamically typed also known as a weakly typed language. where you are not required to define the type of your variable and also the type of the variable can change after it has been defined. dynamically typed language means that the type-cheesing happens at run time while statically. typed language means that type cheeking happens at compile type.

>> for example, JAVA, C++, and C Sharp are statically typed languages because PHP allows such type systems It is more flexible but that flexibility comes at a price of performance and can sometimes result in unexpected bugs.

>> However, PHP has improved its type system a lot in the latest versions and it even supports strict types of PHP. PHP supports 10 primitive types which are grouped by four scalar types four compound types and two special types.

>> There are also two pseudotypes that are mainly used for readability these are mixed and void.

## Type Juggling or Type Coercior

```
function sum(int $x, int $y)
{
    return $x + $y;
}

$sum = sum(2, '3');

echo $sum;
```

>> Basically, what's happening is that even though we have type hinted that this variable must be an integer PHP will try and convert the given value to the function to the given value to the function to the appropriate data type.

```
declare(strict_types=1);

function sum(int $x, int $y)
{
    return $x + $y;
}

$sum = sum(2, '3');

echo $sum;
```

>> The string is not an acceptable type it's expecting an integer. we're getting fatal errors. strict types provide a better quality of code and it will avoid unexpected bugs.

## Type Casting:

```
$x = (int) '5';
var_dump($x);

OUTPUT: int(5)
``` 