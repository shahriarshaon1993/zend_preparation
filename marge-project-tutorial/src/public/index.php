<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$list = ['a', 'b', 'c'];
$notList = [1 => 'a', 'b', 'c'];

var_dump(array_is_list($list));
var_dump(array_is_list($notList));