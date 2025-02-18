<?php

function xapXep($array) {
    for($j = 0; $j < count($array); $j++) {
        for($i = 0; $i < count($array) - 1; $i++) {
            if($array[$i] > $array[$i + 1]) {
                $temp = $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $temp;
            }       
        }
    }
    return $array;
}
$numbers = [4, 2, 8, 1];
$sortedNumbers = xapXep($numbers);
print_r($sortedNumbers);
?>