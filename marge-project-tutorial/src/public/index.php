<?php

declare(strict_types=1);

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

$array3 = [...$array1, ...$array2];

print_r($array3);