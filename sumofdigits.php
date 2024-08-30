<?php

$number = 65;
$sum = 0;

while ($number > 0) {
    $digit = $number % 10;
    $sum += $digit;
    $number = (int)($number / 10);
}

echo "The sum of digits in $number is $sum";