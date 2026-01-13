<?php

echo "|| Jouons à \"Pierre/Papier/Ciseaux ||\"\n\n";
echo "Vous devez choisir entre : 'pierre', 'papier', & 'ciseaux' \n";

$joueur_1 = readline("Au tour du joueur 1 : ");
$joueur_2 = readline("Au tour du joueur 2 : ");

$gagnant_joueur_1 = ($joueur_1 == 'pierre' && $joueur_2 == 'ciseaux')
    || ($joueur_1 == 'ciseaux' && $joueur_2 == 'papier')
    || ($joueur_1 == 'papier' && $joueur_2 == 'pierre');

if ($joueur_1 == $joueur_2) {
    echo "Match null !!!";
} elseif ($gagnant_joueur_1) {
    echo "Bravo Joueur n° 1 ! Vous avez gagné !";
} else {
    echo "Bravo Joueur n° 2 ! Vous avez gagné !";
}
