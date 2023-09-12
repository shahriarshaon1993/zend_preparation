# Lesson 1.5 - Boolean Data Type

>> A boolean is a simple representation of a truth value it can either be true or false

>> The true and false are the predefined constants that come with PHP and they are also case insensitive so you can set this to true or lower case or you can use all uppercase or you can mix and match uppercase and lowercase letters.

```
$isComplete = true;

if ($isComplete) {
    echo 'success';
} else {
    echo 'fail';
}
```

```
integers 0  -0  = false
float 0.0 -0.0 = false
'' = false
'0' = false
[] = false
null = false
```

>> Anything else pretty much be evaluated as true even the negative numbers. that are not zero