## Lesson 1.10 - PHP Array Data Type - Indexed, Associative & Multi-Dimensional Arrays

### Indexing array

> Array are just list of values where those values can be of multiple datatype.

```php
$languages = ['PHP', 'Java', 'Python'];
```

> How you would access each element in the array just like strings arrays are by
> default are indexed by numbers starting a 0.

```php
echo $languages[0];
echo $languages[1];
echo $languages[2];

Output:
PHP 
Java 
Python
```

> We can actually check if the item exists at that specific key or an index
> using isset() function

```php
var_dump($languages[0]);
var_dump($languages[3]);

output:
true
false
```

> You can mutate the array and update the value at a specific index.

```php
$languages[1] = 'C++';

echo $languages[1];

output:
C++
```

### Associative array

```php
$versions = [
    'php' => 8.0.0,
    'python' => 4.0.0
];

var_dump($versions['php']);
var_dump($versions['python']);

output:
8.0.0
4.0.0
```

### Multi-Dimensional Arrays

```php
$languages = [
    'php' => [
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',
        'website' => 'www.php.net',
        'isOpenSource' => true,
        'versions' => [
            ['versions' => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['versions' => 7.4, 'releaseDate' => 'Nov 26, 2019'],
        ]
    ],
    'php' => [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website' => 'www.python.org',
        'isOpenSource' => true,
        'versions' => [
            ['versions' => 3.9, 'releaseDate' => 'Oct 05, 2020'],
            ['versions' => 3.8, 'releaseDate' => 'Oct 14, 2019'],
        ]
    ]
]
```

> If you have multiple keys that are the same the last one will overwrite the other.

```php
$array = [0 => 'foo', 1 => 'bar', '1' => 'baz'];
print_r($array);

output:
Array([0]=>foo[1]=>baz);
```

> That because baz had the same key as bar, and it overrode also the keys have to be 
> either strings or integers though php will try to cast the keys when possible

```php
$array = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd'];
print_r($array);

output:
Array([1]=>d);
```