<?php

$getal =$_GET['getal'];

if(ctype_digit($getal) && (int)$getal>0) {
    require_once('wiskunde.php');
}