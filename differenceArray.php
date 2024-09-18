<?php

$fruits = array("apple", "banana", "orange", "grape");

$groceries = array("banana", "orange", "bread", "milk");

$fruits_not_in_groceries = array_diff($fruits, $groceries);

print_r($fruits_not_in_groceries);
?>
