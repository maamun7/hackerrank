<?php

/**
 * @title Time Conversion
 * @link https://www.hackerrank.com/challenges/birthday-cake-candles/problem
 */

function timeConversion($s) {

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);