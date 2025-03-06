<?php

// Function to check if a number is even or odd
function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        echo "$number is even.\n";
    } else {
        echo "$number is odd.\n";
    }
}

// Function to check if a number is positive, negative, or zero
function checkPositiveNegativeZero($number) {
    if ($number > 0) {
        echo "$number is positive.\n";
    } elseif ($number < 0) {
        echo "$number is negative.\n";
    } else {
        echo "$number is zero.\n";
    }
}

// Test the functions with a number
$testNumber = 10; // Change this to test different numbers

echo "Checking $testNumber:\n";
checkEvenOdd($testNumber);
checkPositiveNegativeZero($testNumber);

?>
