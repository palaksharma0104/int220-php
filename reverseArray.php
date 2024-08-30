<?php

function reverseArray($array) {
    $reversedArray = [];
    $length = count($array);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedArray[] = $array[$i];
    }

    return $reversedArray;
}

$originalArray = [1, 2, 3, 4, 5];
$reversedArray = reverseArray($originalArray);

print_r($reversedArray);
?>