<?php
function rotLeft($a, $d) {
    // Write your code here
    $n = count($a);

    for ($i = 0; $i < $d; $i++) {
        $left = array_shift($a);
        $a[] = $left;
    }

    return $a;
}