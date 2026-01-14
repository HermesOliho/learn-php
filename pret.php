<?php 
 $salaireMensuel =readline("entre votre salaire mensuel:");
  $montantPret = readline("entre le montant que tu desire:");
 //$salaireMensuel =100;
 $montantInitial =1500;
  if($salaireMensuel < $montantInitial){
  echo "pret refuse \n";
  } elseif($montantPret > 10*$salaireMensuel){
    echo"pret refuse \n" ;
  }else{
    echo"pret accepter \n";
  }