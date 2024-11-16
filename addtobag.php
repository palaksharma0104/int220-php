<?php
// Function to add an item to the shopping bag using cookies
function addToBag($item) {
    // Retrieve the current contents of the shopping bag from the cookie
    $bag = json_decode($_COOKIE['shopping_bag'], true);

    // If the cookie doesn't exist or is empty, create a new empty array
    if (!isset($bag)) {
        $bag = [];
    }

    // Add the new item to the array
    $bag[] = $item;

    // Encode the array as JSON and store it in the cookie
    setcookie('shopping_bag', json_encode($bag), time() + 3600); // Set expiration time to 1 hour
}

// Function to remove an item from the shopping bag using cookies
function removeFromBag($item) {
    // Retrieve the current contents of the shopping bag from the cookie
    $bag = json_decode($_COOKIE['shopping_bag'], true);

    // If the cookie doesn't exist or is empty, do nothing
    if (!isset($bag)) {
        return;
    }

    // Find the index of the item to be removed
    $index = array_search($item, $bag);

    // If the item was found, remove it from the array
    if ($index !== false) {
        unset($bag[$index]);
    }

    // Encode the array as JSON and store it in the cookie
    setcookie('shopping_bag', json_encode($bag), time() + 3600); // Set expiration time to 1 hour
}

// Example usage:
// Add an item to the shopping bag
addToBag('apple');
addToBag('orange');

// Remove an item from the shopping bag
removeFromBag('apple');

// Retrieve the contents of the shopping bag
$bagContents = json_decode($_COOKIE['shopping_bag'], true);
print_r($bagContents);
