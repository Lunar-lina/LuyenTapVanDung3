<?php

function timGiaTri($tim, $array) {
    $kq = array_search($tim, $array);  
    return($kq != false) ? $kq : -1;
}
$traiCay = ["Apple", "Banana", "Cherry"];
$index = timGiaTri("Banana", $traiCay);
echo $index;
?>