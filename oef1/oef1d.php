<?php

$aantalLijnen = 7;
$interval = 5;
$teller = 0;

for ($i = 0; $i < $aantalLijnen; $i++) {
    $result = "";
    for ($j = 0; $j < 2 * $i + 1; $j++) {
        $result = $teller % $interval === 0 ? $result."@" : $result."#";
        $teller++;
    }
    print(str_repeat(" ", $aantalLijnen -1 -$i).$result);
    print("\n");
}
