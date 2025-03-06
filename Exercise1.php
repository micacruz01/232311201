php
<?php

// Declare variables
$a = 15;
$b = 7;

// Compute and print their sum
$sum = $a + $b;
echo "Sum: $sum\n";

// Compute and print their difference
$difference = $a - $b;
echo "Difference: $difference\n";

// Compute and print their product
$product = $a * $b;
echo "Product: $product\n";

// Compute and print their quotient
if ($b != 0) {
    $quotient = $a / $b;
    echo "Quotient: $quotient\n";
} else {
    echo "Cannot divide by zero.\n";
}

?>
