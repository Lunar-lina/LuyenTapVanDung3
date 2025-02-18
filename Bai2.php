<?php

function daoNguocMang($array) {
    $size = sizeof($array);

    for($i=$size-1; $i>=0; $i--){
        echo $array[$i];
}
}
$numbers = [1, 2, 3, 4, 5];
$mangDaoNguoc = daoNguocMang($numbers);
print_r($mangDaoNguoc);
?>