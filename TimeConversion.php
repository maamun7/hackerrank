<?php

/**
 * @title Time Conversion
 * @link https://www.hackerrank.com/challenges/birthday-cake-candles/problem
 */
// sample
// $s = '07:05:45PM';

function timeConversion($s) {
    $format = strtolower(substr($s, -2));
    $wfs = substr($s, 0, -2); // cut string am/pm [wfs = withoutFormatString]
    $sta = explode(':', $wfs); // string to array [sta = stringToArray]
    $hour = $sta[0];// getting hour from zero index of array

    if($hour == 12 && $format =='am') {
        $sta[0] = '00';
    } else if($hour < 12 && $format =='pm') {
        $sta[0] = 12 + $hour;
    }

    return implode(':', $sta);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);