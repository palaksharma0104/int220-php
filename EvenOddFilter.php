<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$evenNumbers = array_filter($arr, function ($value) {
    return $value % 2 === 0;
});

$oddNumbers = array_filter($arr, function ($value) {
    return $value % 2 !== 0;
});

$squaredOddNumbers = array_map(function ($value) {
    return $value * $value;
}, $oddNumbers);

sort($squaredOddNumbers);

print_r("Even numbers: " . implode(", ", $evenNumbers)); 
print_r("Squared and sorted odd numbers: " . implode(", ", $squaredOddNumbers));
