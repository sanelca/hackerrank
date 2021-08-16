<?php

function minimumBribes($q) {
    // Write your code here
    $bribes = [];
    $seek = 1;
    $keys = array_flip($q);
    $total = count($q);

    for($i = 0; $i <= $total; $i++) {

        if($seek > $total) {
            break;
        }

        if(($seek-1) == $keys[$seek]) {
            $seek++;
            $i = -1;
            continue;
        }

        $prev = $q[$keys[$seek]-1];
        $prevkey = $keys[$prev];
        $currkey = $keys[$seek];

        $q[$keys[$seek]-1] = $seek;
        $q[$keys[$seek]] = $prev;

        $keys[$prev] = $currkey;
        $keys[$seek] = $prevkey;

        if(array_key_exists($prev, $bribes)) {
            $bribes[$prev]++;
        } else {
            $bribes[$prev] = 1;
        }
    }

    $result = max($bribes) >= 3 ? 'Too chaotic' : array_sum($bribes);
    echo "$result \n";
}
