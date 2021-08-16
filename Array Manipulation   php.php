<?php
function arrayManipulation($n, $queries) {
    // Write your code here
    $res = array();
    $sum = $max = 0;

    for ($q = 0; $q < $n; $q++) {
        $a = $queries[$q][0];
        $b = $queries[$q][1];
        $k = $queries[$q][2];
        @$res[$a - 1] += $k;
        if ($b < $n) {
            @$res[$b] -= $k;
        }
    }

    for ($i = 0; $i < $n; $i++) {
        $sum += @$res[$i];
        if ($max < $sum) {
            $max = $sum;
        }
    }

    return $max;
}