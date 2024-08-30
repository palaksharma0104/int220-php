<?php
// Define variables for customer status and purchase amount
$is_regular_customer = true; // Assume the customer is a regular customer (set to false if not)
$purchase_amount = 300; // Example purchase amount

// Check if the customer is a regular customer and if the purchase amount is more than 500
if ($is_regular_customer && $purchase_amount > 500) {
    // Calculate the discount
    $discount = $purchase_amount * 0.20;
    $final_amount = $purchase_amount - $discount;

    echo "You are eligible for a 20% discount!<br>";
    echo "Original Purchase Amount: $$purchase_amount<br>";
    echo "Discount Amount: $$discount<br>";
    echo "Final Amount to Pay: $$final_amount";
} else {
    echo "No discount available.<br>";
    echo "Total Amount to Pay: $$purchase_amount";
}
?>
