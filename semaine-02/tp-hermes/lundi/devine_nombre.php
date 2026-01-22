<?php
echo "|| Jeu du Plus ou Moins ⭐⭐⭐ ||\n";
echo "Essayez de deviner le nombre secret.\nIl s'agit d'un nombre compris entre 1 et 100\n";

$nombre_a_deviner = rand(1, 5);
$tentative = 1;
do {
    echo "Tentative n° $tentative\n";
    $nombre_saisi = (int) readline("Entrez un nombre : ");
    if ($nombre_a_deviner == $nombre_saisi) {
        echo "Félicitations ! Le nombre secret c'est $nombre_saisi.\n";
        break;
    } else {
        echo "Perdu !\n";
        if ($nombre_a_deviner < $nombre_saisi)
            echo "Plus petit !\n";
        else
            echo "Plus grand !\n";
        echo "------------------------\n";
    }
    ++$tentative;
} while ($tentative < 7);
