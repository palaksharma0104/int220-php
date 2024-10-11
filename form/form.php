<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$age = $_POST['age'];


if (empty($name) || empty($email) || empty($message) || empty($age)) {
    echo "Please fill out all fields.";
} else {
 
    $to = "your_email@example.com";
    $subject = "Contact Form Submission";
    $body = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;

    if (mail($to, $subject, $body)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "There was an error sending your message.";
    }
}
?>