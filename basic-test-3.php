<?php

function timeConversion($time)
{
    // Extract the period (AM/PM)
    $period = substr($time, -2);
    // Extract the hour, minute, and second
    $hh = intval(substr($time, 0, 2));
    $mm = substr($time, 3, 2);
    $ss = substr($time, 6, 2);

    // Convert to military time
    if ($period === 'AM') {
        if ($hh == 12) {
            $hh = '00'; // Midnight case
        } else {
            $hh = str_pad($hh, 2, '0', STR_PAD_LEFT); // Ensure two digits
        }
    } else { // PM case
        if ($hh != 12) {
            $hh += 12; // Convert PM hour to 24-hour format
        }
    }

    // Return the military time format
    return "$hh:$mm:$ss";
}

// Read the input time
echo "Input a time in 12-hour AM/PM format: \n";
$inputTime = trim(fgets(STDIN));

// Convert and print the military time
echo timeConversion($inputTime) . "\n";
