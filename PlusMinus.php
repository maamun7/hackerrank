<?php

/**
 * @title Plus Minus
 * @link https://www.hackerrank.com/challenges/plus-minus
 */

// sample
    /*$arr = [
        -11, 2, 4, 9, 0, -9
    ];*/

function plusMinus($arr) {

    $result = [];
    $zero = 0;
    $positive = 0;
    $negative = 0;

    foreach($arr as $val) {
        if($val > 0) {
            $positive += 1;
        } else if ($val < 0) {
            $negative += 1;
        } else if ($val == 0) {
            $zero += 1;
        }
    }

    $count = count($arr);

    $result[] = sprintf('%0.6f', $positive / $count);
    $result[] = sprintf('%0.6f', $negative / $count);
    $result[] = sprintf('%0.6f', $zero / $count);

    echo implode(PHP_EOL, $result);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);

