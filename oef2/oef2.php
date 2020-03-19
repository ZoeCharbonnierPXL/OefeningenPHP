<?php

function maakRij($min, $max, $stap){
    $array = array();
    foreach (range($min, $max, $stap) as $number) {
        array_push($array, $number);
    }
    print_r($array);
}

maakRij(1, 5, 2);
maakRij(5, 1, 1);
