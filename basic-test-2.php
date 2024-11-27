<?php
/*
Given an array of integers, calculate the ratios of its elements that are positive, negative, and zero. 
Print the decimal value of each fraction on a new line with 6 places after the decimal.
*/

// Read the size of the array
echo "Input the size of the array: \n";
$n = intval(trim(fgets(STDIN)));

// Read the array elements
echo "Input the space-separated integers that describe the array: \n";
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

// Initialize counters for positive, negative, and zero values
$positiveCount = 0;
$negativeCount = 0;
$zeroCount = 0;

// Iterate through the array and count positive, negative, and zero values
foreach ($arr as $value) {
    if ($value > 0) {
        $positiveCount++;
    } elseif ($value < 0) {
        $negativeCount++;
    } else {
        $zeroCount++;
    }
}

// Calculate the ratios
$positiveRatio = $positiveCount / $n;
$negativeRatio = $negativeCount / $n;
$zeroRatio = $zeroCount / $n;

// Print the results formatted to 6 decimal places
echo number_format($positiveRatio, 6) . "\n";
echo number_format($negativeRatio, 6) . "\n";
echo number_format($zeroRatio, 6);
