<?php
function activityNotifications($expenditures, $d) {
    // Write your code here
    $trailingValuesCount = [];
    for ($i = 0; $i < $d; $i++){
        $trailingValuesCount[$expenditures[$i]]++;
    }
    $odd = $d % 2 != 0;

    $alertsCount = 0;
    for ($i = $d; $i < count($expenditures); $i++){
        ksort($trailingValuesCount);

        $sum         = 0;
        $leftMedian  = null;
        $rightMedian = null;
        foreach ($trailingValuesCount as $key => $value){
            $sum += $trailingValuesCount[$key];

            if ($leftMedian !== null){
                $rightMedian = $key;
                break;
            }

            if ($leftMedian === null){
                if ($sum * 2 >= $d){
                    $leftMedian = $key;

                    if ($odd || $sum * 2 > $d + 1){
                        $rightMedian = $leftMedian;
                    }
                }
            }

            if ($rightMedian !== null){
                break;
            }
        }

        if ($expenditures[$i] >= $leftMedian + $rightMedian){
            $alertsCount++;
        }

        $trailingValuesCount[$expenditures[$i - $d]]--;
        $trailingValuesCount[$expenditures[$i]]++;
    }

    return $alertsCount;

}