<?php
echo "Ce script vous permet de connaître la saison selon le mois dans le quel vous vous trouvez !\n";

$num_mois = (int) readline("Entre le numéro d'un mois (1 - 12) : ");

switch (true) {
    case ($num_mois >= 3 && $num_mois <= 5):
        echo "Vous êtes au Printemps";
        break;
    case ($num_mois >= 6 && $num_mois <= 8):
        echo "Vous êtes en Été";
        break;
    case ($num_mois >= 9 && $num_mois <= 11):
        echo "Vous êtes en Automne";
        break;
    case ($num_mois == 12):
    case ($num_mois == 1):
    case ($num_mois == 2):
        echo "Vous êtes en Hiver";
        break;
    default:
        echo "Une année n'a pas de mois n° $num_mois";
        break;
}
