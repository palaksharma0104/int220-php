<?php

// Set the cookie name
$cookieName = 'theme';

// Check if the cookie exists
if (isset($_COOKIE[$cookieName])) {
    // Retrieve the cookie value
    $theme = $_COOKIE[$cookieName];
} else {
    // Set the default theme (e.g., light mode)
    $theme = 'light';
}

// Set the appropriate CSS file based on the theme
if ($theme === 'dark') {
    $cssFile = 'dark.css';
} else {
    $cssFile = 'light.css';
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Light/Dark Mode</title>
    <link rel="stylesheet" href="<?php echo $cssFile; ?>">
</head>
<body>
    <button id="theme-toggle">Toggle Theme</button>

    <script>
        const themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', () => {
            const currentTheme = document.body.classList.contains('dark') ? 'dark' : 'light';
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

            document.body.classList.toggle('dark');

            // Set the cookie to remember the theme preference
            document.cookie = `${cookieName}=${newTheme}; expires=; path=/`;
        });
    </script>
</body>
</html>