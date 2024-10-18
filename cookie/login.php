<?php
session_start();

// Check if user is already logged in
if (isset($_COOKIE['username'])) {
    header("Location: welcome.php");
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy credentials
    $correctUsername = 'admin';
    $correctPassword = 'password123';

    // Validate credentials
    if ($username === $correctUsername && $password === $correctPassword) {
        // Set cookie for 1 hour
        setcookie("username", $username, time() + 3600, "/");
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="POST" action="">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>

    <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
</body>
</html>
