<?php

function factorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers.";
    }

    $result = 1;
    $i = 1;

    while ($i <= $n) {
        $result *= $i;
        $i++;
    }

    return $result;
}

$number = 5;
$factorial = factorial($number);
echo "The factorial of $number is $factorial";
?>