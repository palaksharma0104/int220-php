<?php

function factorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers.";
    }

    if ($n == 0){
        return "Factorial is 1 for 0 ";
    }

    $result = 1;
    $i = 1;

    while ($i <= $n) {
        $result *= $i;
        $i++;
    }

    return $result;
}

$number = 7;
$factorial = factorial($number);
echo "The factorial of $number is $factorial";
?>