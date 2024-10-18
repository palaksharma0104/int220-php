<?php
session_start();

// Check if the user is logged in
if (!isset($_COOKIE['username'])) {
    header("Location: login.php");
    exit();
}

// Logout logic
if (isset($_POST['logout'])) {
    // Clear the cookie
    setcookie("username", "", time() - 3600, "/");
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_COOKIE['username']); ?>!</h1>
    <form method="POST" action="">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>
