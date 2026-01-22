<?php

echo "|| Calculateur de factorielle ||\n";

$nombre = (int) readline("Entrez un nombre entier : ");

if (!$nombre)
    $nombre = 1;

$factorielle = 1;

// Avec 'for'
for ($i = 1; $i <= $nombre; $i++) {
    $factorielle *= $i;
}

// Avec while
// $i = 1;
// while ($i <= $nombre) {
//     $factorielle *= $i;
//     ++$i;
// }

echo "La factorielle de $nombre c'est $factorielle";
