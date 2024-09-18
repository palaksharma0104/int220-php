<?php

$fruits = array("apple" => 1, "banana" => 2, "orange" => 3);

$key = array_search(2, $fruits);

if ($key !== false) {
    echo "The key for value 2 is: " . $key;
} else {
    echo "Value not found.";
}
?>
