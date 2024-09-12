<?php

declare(strict_types=1);

use App\Checkbox;
use App\Example\Circle;
use App\Example\Rectangle;
use App\Radio;
use App\Text;

require __DIR__ . '/../vendor/autoload.php';

$fields = [
    new Text('textField'),
    new Checkbox('checkboxField'),
    new Radio('radioField')
];

foreach ($fields as $field) {
    echo $field->render() . '</br>';
}

// Example 2
$circle = new Circle('Circle', 5);
$rectangle = new Rectangle('Rectangle', 4, 6);

echo "Area of " . $circle->getName() . ": " . $circle->calculateArea() . "<br />";
echo "Area of " . $rectangle->getName() . ": " . $rectangle->calculateArea() . "<br />";