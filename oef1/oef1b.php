<?php

$aantalLijnen = 7;
for ($rij = 1; $rij <= $aantalLijnen; $rij++)
{
    for($kolom = 0; $kolom < $aantalLijnen -$rij; $kolom++ )
    {
        print(" ");
    }
    for($kolom = 0; $kolom < $rij; $kolom++ ) {
        print("#");
    }
    print("\n");
}
