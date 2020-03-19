<?php
var_dump($_GET['getallen']);
$array = $_GET['getallen'];
$invalidArray = array();
foreach($array as $item) {
    if(!is_numeric($item)){
        $index = array_search($item, $array);
        array_push($invalidArray, $item);
        array_splice($array, $index, 1);
    }
}
print("</br>");
print("MIN: ".min($array));
print("</br>");
print("MAX: ".max($array));
print("</br>");
print("AVG: ".array_sum($array)/count($array));
print("</br>");
print("Invalid Items: ");
print_r($invalidArray);
