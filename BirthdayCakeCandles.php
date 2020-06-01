<?php

/**
 * @title Birthday cake candles
 * @link https://www.hackerrank.com/challenges/birthday-cake-candles/problem
 */

// sample
    /*$arr = [5, 2, 5, 5]; */


// Complete the birthdayCakeCandles function below.
function birthdayCakeCandles($ar) {
    $max = max($ar);
    $count_val = array_count_values($ar);
    return $count_val[$max];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);


