<?php
$to      = 'test@example.com';  // The recipient email address for testing
$subject = 'Test Email to MailHog';
$message = 'Hello! This is a test email sent to MailHog using PHP.';
$headers = 'From: sender@example.com' . "\r\n" .
           'Reply-To: sender@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Failed to send email.';
}
?>
