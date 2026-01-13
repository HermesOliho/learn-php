<?php
echo "Vérificateur d'année bissextile. Bienvenue !\n";
$an_saisi = (int) readline("Veuillez entrer une année : ");

$condition1 = $an_saisi % 400 == 0;
$condition2 = ($an_saisi % 4 == 0) && ($an_saisi % 100 != 0);

if ($condition1 || $condition2) {
    echo "$an_saisi est une année bissextile";
} else {
    echo "$an_saisi n'est pas une année bissextile";
}
