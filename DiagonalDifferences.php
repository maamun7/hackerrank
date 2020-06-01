<?php

/**
 * @title Diagonal Difference
 * @link https://www.hackerrank.com/challenges/diagonal-difference
 */

// sample
/*$arr = [
    [11,2,4],
    [4,5,6],
    [10,8,-12]
];*/

function diagonalDifference($arr) {
    $primary_diagonal = 0;
    $secondary_diagonal = 0;

    $si = count($arr) - 1;

    foreach($arr as $k => $sub_arr) {
        $primary_diagonal += $sub_arr[$k];
        $secondary_diagonal += $sub_arr[$si];
        $si--;
    }

    return abs($primary_diagonal - $secondary_diagonal);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);