<?php
echo "Motif 1 ou 2 ?\n";
$motif_choisi = (int) readline(">> ");

switch ($motif_choisi) {
    case 1: // Losange
        $max = 9;
        for ($i = 1; $i <= $max; $i += 2) {
            $milieu = ($max + 1) / 2;
            for ($j = 1; $j <= $max; $j++) {
                $vides = ($max - $i) / 2;
                $afficher_etoile = $vides < $j && ($max - $vides) >= $j;
                if (!$afficher_etoile) {
                    echo "*";
                    // echo "⭐";
                } else {
                    echo " ";
                }
            }
            echo "\n";
        }
        for ($i = $max - 2; $i >= 1; $i -= 2) {
            $milieu = ($max + 1) / 2;
            for ($j = 1; $j <= $max; $j++) {
                $vides = ($max - $i) / 2;
                $afficher_etoile = $vides < $j && ($max - $vides) >= $j;
                if ($afficher_etoile) {
                    echo "*";
                    // echo "⭐";
                } else {
                    echo " ";
                }
            }
            echo "\n";
        }
        break;
    case 2: // Sapin
        $max = 9;
        for ($i = 1; $i <= ($max + 2); $i += 2) {
            $milieu = ($max + 1) / 2;
            for ($j = 1; $j <= $max; $j++) {
                $vides = ($max - $i) / 2;
                $afficher_etoile = $vides < $j && ($max - $vides) >= $j;
                if ($afficher_etoile && $i <= $max) {
                    echo "*";
                    // echo "⭐";
                } elseif ($j == ($max + 1) / 2) {
                    echo "||";
                } else {
                    echo " ";
                }
            }
            echo "\n";
        }
        break;
    default:
        echo "Vous devez choisir soit 1 ou soit 2 !!";
        break;
}
