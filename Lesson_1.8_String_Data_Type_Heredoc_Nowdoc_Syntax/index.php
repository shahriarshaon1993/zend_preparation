<?php

function strposRecursive($haystack, $needle, $offset = 0, &$results = [])
{
    $offset = strpos($haystack, $needle, $offset);

    if ($offset === false) {
        return $results;
    } else {
        $results[] = $offset;
        return strposRecursive($haystack, $needle, ($offset + 1), $results);
    }
}

$string = 'This is a some string a';
$search = 'a';
$found = strposRecursive($string, $search);

if ($found) {
    foreach ($found as $pos) {
        echo 'Found "' . $search . '" in string "' . $string . '" at position <b>' . $pos . '</b><br />';
    }
} else {
    echo '"' . $search . '" not found in "' . $string . '"';
}
