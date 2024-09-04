<!-- //regular customer and discount script -->

<?php
$is_regular_customer = true;
$purchase_amount = 300;

if ($is_regular_customer && $purchase_amount > 500) {
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
