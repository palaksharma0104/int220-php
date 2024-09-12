<?php

function printFullName($userChoice) {
    $nameParts = explode(" ", $userChoice);
    $firstName = $nameParts[0];
    $lastName = $nameParts[1];
    echo "$firstName $lastName";
}

// Example usage:
$userChoice = "John Doe";
printFullName($userChoice); // Output: John Doe

?>