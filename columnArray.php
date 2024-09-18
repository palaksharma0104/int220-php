<?php

$users = array(
    array("id" => 1, "name" => "Alice", "age" => 25),
    array("id" => 2, "name" => "Bob", "age" => 30),
    array("id" => 3, "name" => "Charlie", "age" => 35)
);

$names = array_column($users, 'name');

print_r($names);
?>
