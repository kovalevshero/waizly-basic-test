<?php
/* 
Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of
the five integers. Then print the respective minimum and maximum values as a single line of two space-separated long
integers. 
*/

while (true) {
    // Read input
    echo "Input a single line of five space-separated integers: \n";
    $input = trim(fgets(STDIN));
    $arr = explode(" ", $input);

    // Convert input to integers
    $arr = array_map('intval', $arr);

    // Check if we have exactly 5 integers
    if (count($arr) === 5) {
        // Calculate the total sum of all integers
        $totalSum = array_sum($arr);

        // Find the minimum and maximum values by excluding one integer at a time
        $minSum = PHP_INT_MAX;
        $maxSum = PHP_INT_MIN;

        foreach ($arr as $num) {
            $currentSum = $totalSum - $num;
            if ($currentSum < $minSum) {
                $minSum = $currentSum;
            }
            if ($currentSum > $maxSum) {
                $maxSum = $currentSum;
            }
        }

        // Print the result
        echo $minSum . " " . $maxSum . "\n";
        break;
    } else {
        echo "Invalid input. Please make sure to enter exactly five integers.\n";
    }
}
