# Find the largest number in an array.

```
function findMax($arr) {
    if (empty($arr)) {
        return null; // Return null for an empty array
    }

    $max = $arr[0]; // Assume the first element is the maximum

    foreach ($arr as $key => $value) {
        if ($value > $max) {
            $max = $value; // Update the maximum if a larger value is found
        }
    }

    return $max;
}

// Example usage:
$numbers = [12, 45, 67, 23, 9, 56, 100];
$maxNumber = findMax($numbers);
echo "The largest number is: $maxNumber";
```

# Bubble Sort

```
function bubbleSort($arr) {
    $n = count($arr);

    // Traverse through all array elements
    for ($i = 0; $i < $n - 1; $i++) {
        // Last $i elements are already in place, so we don't need to check them again
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Swap if the element found is greater than the next element
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap $arr[$j] and $arr[$j + 1]
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

// Example usage:
$numbers = [4, 2, 8, 6, 1];
$numbers = bubbleSort($numbers); // Sort in ascending order
print_r($numbers);
```