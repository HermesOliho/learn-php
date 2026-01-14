<?php
$nom_premier_joueur = readline("joueur 1 entre votre nom:");
echo"Bienvenu  $nom_premier_joueur \n";
$element_joueur1=readline("entrain un element entre:Pierre,Ciseaux,Papier :");
$nom_second_joueur = readline("joueur 2 entre votre nom:");
echo"Bienvenu  $nom_premier_joueur \n";
$element_joueur2=readline("entain un element entre:(Pierre,Ciseaux,Papier ):");

if($element_joueur1 === "Pierre" && $element_joueur2 === "Ciseaux"){
    echo "$nom_premier_joueur tu as gagne";
}elseif($element_joueur1 === "Ciseaux" && $element_joueur2 === "Pierre"){
    echo" $nom_second_joueur a gagne";
}
else{
    echo "joueur 1 a gagner";
}