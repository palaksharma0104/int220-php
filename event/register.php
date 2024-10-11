<?php
// Initialize error array
$errors = [];

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize input
    $full_name = trim($_POST['full_name']);
    $contact_number = trim($_POST['contact_number']);
    $email = trim($_POST['email']);
    $no_of_attendees = trim($_POST['no_of_attendees']);
    $total_attendees = trim($_POST['total_attendees']);

    // Validate Full Name
    if (empty($full_name)) {
        $errors['full_name'] = "Full Name is required.";
    }

    // Validate Contact Number
    if (empty($contact_number)) {
        $errors['contact_number'] = "Contact Number is required.";
    } elseif (!preg_match("/^[0-9]{10}$/", $contact_number)) {
        $errors['contact_number'] = "Contact Number must be 10 digits.";
    }

    // Validate Email
    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    // Validate Number of Attendees
    if (empty($no_of_attendees)) {
        $errors['no_of_attendees'] = "Number of Attendees is required.";
    } elseif (!filter_var($no_of_attendees, FILTER_VALIDATE_INT) || $no_of_attendees < 1) {
        $errors['no_of_attendees'] = "Please enter a valid number of attendees.";
    }

    // Validate Total Attendees
    if (empty($total_attendees)) {
        $errors['total_attendees'] = "Total Attendees is required.";
    } elseif (!filter_var($total_attendees, FILTER_VALIDATE_INT) || $total_attendees < 1) {
        $errors['total_attendees'] = "Please enter a valid total attendees number.";
    }

    // If no errors, proceed with form submission
    if (empty($errors)) {
        // Perform form submission logic (e.g., save to the database)
        echo "Form submitted successfully!";
        // Redirect or handle success scenario
        exit();
    }
}
