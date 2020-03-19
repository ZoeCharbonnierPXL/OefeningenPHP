<?php

$getal = $_GET['getal'];
$i=1;
$getal2=1;

while ($i != $getal)
{
    $getal2=$getal2*($i+1);
    $i++;
}
print($getal."! = ".$getal2);
