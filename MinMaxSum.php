<?php

/**
 * @title Staircase
 * @link https://www.hackerrank.com/challenges/mini-max-sum/problem?h_r=next-challenge&h_v=zen&h_r=next-challenge&h_v=zen&h_r=next-challenge&h_v=zen&h_r=next-challenge&h_v=zen&h_r=next-challenge&h_v=zen
 */

// sample
//$arr = [1, 2, 3, 5, 4];

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    // min calculation
    asort($arr);
    $min_arr = $arr;
    array_pop($min_arr);
    $min_sum = array_sum($min_arr);

    // max calculation
    arsort($arr);
    $max_arr = $arr;
    array_pop($max_arr);
    $max_sum = array_sum($max_arr);

    echo $min_sum . str_repeat(' ', 1) . $max_sum;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);

