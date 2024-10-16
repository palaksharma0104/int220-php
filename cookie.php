<?php

// Set the cookie name
$cookieName = 'my_cookie';

// Check if the cookie exists
if (isset($_COOKIE[$cookieName])) {
    // Cookie is accepted
    echo "Cookie '$cookieName' is accepted.";

    // Get the cookie value
    $cookieValue = $_COOKIE[$cookieName];
    echo "<br>Cookie value: $cookieValue";

    // Get the cookie expiration time
    $cookieExpireTime = time() + 3600; // 1 hour from now
    echo "<br>Cookie expires on: " . date('Y-m-d H:i:s', $cookieExpireTime);
} else {
    // Cookie is not accepted
    echo "Cookie '$cookieName' is not accepted.";
}
?>