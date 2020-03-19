<?php

$aantalLijnen = 7;
for ($i = 0; $i < $aantalLijnen; $i++) {
    $pyramide = "";
    for ($j = 0; $j < $aantalLijnen - $i; $j++) {
        $pyramide = $pyramide." ";
    }
    for ($k = 0; $k < ($i * 2) + 1; $k++){
        $pyramide = $pyramide."#";
    }
    $pyramide = $pyramide."\n";
    print($pyramide);
}
