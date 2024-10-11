<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$age = $_POST['age'];


if (empty($name) || empty($email) || empty($message) || empty($age)) {
    echo "Please fill out all fields.";
    
}

?>
