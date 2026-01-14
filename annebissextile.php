<?php
$an_utilisateur = readline("entre une annee de toix comme ,1960:") ;
if ($an_utilisateur % 100 == 0 && $an_utilisateur % 400 != 0) {
    echo " c'est ne pas une annee bissextile \n";
}else{
 echo" $an_utilisateur . est une annee bissextile \n";
}
