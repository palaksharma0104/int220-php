<?php
session_start();

// Replace with your actual user credentials
$users = array(
    'user1' => 'password1',
    'user2' => 'password2'
);

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username]) && $users[$username] === $password) {
    $_SESSION['username'] = $username;
    header("Location: protected.php");
    exit();
} else {
    echo "Invalid username or password.";
}
?>0
