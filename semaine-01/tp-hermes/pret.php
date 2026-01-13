<?php
echo "|| Simulateur de prêt ||\n";

$salaire_mensuel = (float) readline("Quel est votre salaire ? : ");
$pret = (float) readline("Quel montant voulez-vous emprunter ? : ");

$condition_1 = $salaire_mensuel >= 1500;
$condition_2 = $pret < ($salaire_mensuel * 10);

if ($condition_1 && $condition_2) {
    echo "Félicitations ! Votre prêt est accepté !";
} else {
    echo "Désolé ! Vous ne pouvez pas avoir pas avoir ce prêt !";
    /* Pourquoi on a refusé */
    if (!$condition_1) {
        echo "\nVotre salaire mensuel ne vous permet d'avoir un prêt chez nous.";
    }
    if (!$condition_2) {
        $max = $salaire_mensuel * 10;
        echo "\nVous ne pouvez pas avoir un prêt qui dépasse {$max}";
    }
}
