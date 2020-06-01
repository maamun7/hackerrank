<?php

/**
 * @title Staircase
 * @link https://www.hackerrank.com/challenges/staircase/problem?h_r=next-challenge&h_v=zen
 */

// sample
    /*$n = 6 */

function staircase($n) {

    for($i = $n; $i >= 1; $i--) {

        $result_str = '';
        $space = $i-1;
        $hash = $n - $space;

        for($hash; $hash >= 1; $hash--) {

            for($space; $space >= 1; $space--) {
                $result_str .= " ";
            }

            $result_str .= '#';
        }

        echo $result_str.PHP_EOL;

        //another solution
        /*for ($i = 1; $i <= $n; $i++) {
            print str_pad(str_repeat('#', $i), $n, ' ', STR_PAD_LEFT) . PHP_EOL;
        }*/
    }
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);

