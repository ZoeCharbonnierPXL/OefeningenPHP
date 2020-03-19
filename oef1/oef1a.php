<?php

print("Option 1\n");
$aantalLijnen = 7;
for ($rij = 0; $rij < $aantalLijnen; $rij++)
{
    for($kolom = 0; $kolom <= $rij; $kolom++ )
    {
        print("#");
    }
    print("\n");
}

print("\nOption 2\n");
for ($rij = "#"; strlen($rij) <= $aantalLijnen; $rij = $rij."#") {
    print($rij);
    print("\n");
}