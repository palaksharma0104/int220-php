<?php

$fruits1 = array("apple", "banana", "orange", "grape");

$fruits2 = array("banana", "grape", "pear", "apple");

$common_fruits = array_intersect($fruits1, $fruits2);

print_r($common_fruits);
?>
