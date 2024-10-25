<?php
// Custom error handler
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "Custom Error [{$errno}]: {$errstr} in {$errfile} on line {$errline}<br>";
    // You can log errors to a file or database here
    file_put_contents("error_log.txt", "Error [{$errno}]: {$errstr} in {$errfile} on line {$errline}\n", FILE_APPEND);
    return true; // Prevents the PHP internal error handler from running
}

// Custom exception handler
function customExceptionHandler($exception) {
    echo "Custom Exception: " . $exception->getMessage() . "<br>";
    // Log exception details
    file_put_contents("error_log.txt", "Exception: " . $exception->getMessage() . "\n", FILE_APPEND);
}

// Set the custom error and exception handlers
set_error_handler("customErrorHandler");
set_exception_handler("customExceptionHandler");

// Trigger an error
echo $undefined_variable; // Notice-level error

// Trigger an exception
throw new Exception("This is a custom exception.");

?>
