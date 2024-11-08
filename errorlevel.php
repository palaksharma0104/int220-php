<?php
// Set error reporting to E_WARNING level (2)
error_reporting(E_WARNING);

// Example: Trigger a warning
$filename = "non_existent_file.txt";
$file = fopen($filename, "r"); // This will trigger a warning because the file doesn't exist

// Custom error handler for warnings
function warningHandler($errno, $errstr, $errfile, $errline) {
    echo "Warning [{$errno}]: {$errstr} in {$errfile} on line {$errline}<br>";
}

// Set the custom warning handler
set_error_handler("warningHandler", E_WARNING);

// Trying to trigger a warning with a division by zero
$result = 10 / 0; // This triggers a warning
?>
