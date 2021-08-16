<?php
function minimumSwaps($arr) {
    $byIndex = [];    // index => value
    $byValue = [];    // value => index

    for ($i = 1; $i <= count($arr); $i++) {
        $byIndex[$i] = $arr[$i - 1];
        $byValue[$arr[$i - 1]] = $i;
    }

    $noSwaps = 0;
    $i = 1;

    while ($i <= count($byIndex)) {
        $value = $byIndex[$i];

        if ($value != $i) {
            $j = $byValue[$i];  //j index

            $temp = $byIndex[$i];
            $byIndex[$i] = $byIndex[$j];
            $byIndex[$j] = $temp;

            $byValue[$value] = $j;

            $noSwaps++;
        }

        $i++;
    }

    return $noSwaps;

}