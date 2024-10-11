<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validate the data (optional)
if (empty($name) || empty($email) || empty($message)) {
    echo "Please fill out all fields.";
} else {
    // Process the form data (e.g., send an email)
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
