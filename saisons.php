<?php
$numero = readline("entre un numero du mois entre 1-12 :");
$saison ;

switch($numero){
 case $numero >=3 && $numero <=5:
    echo " Printemps \n";
    break;
 case $numero > 5 && $numero<=8:  
    echo "Été \n";
    break;
 case $numero >8 &&  $numero <= 11:
    echo"Automne \n";
    break;
 
   case $numero ==12 || $numero ==1 || $numero ==2  :
    echo"Hiver \n";
    break;
 default   :
    echo" le numero n'est pas prise en chage , reesayer !\n" ;
    break;   
    
}