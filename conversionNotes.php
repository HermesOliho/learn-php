<?php
$note_entrer = readline("Entre votre note obtenue <=20:");
if($note_entrer ===18 || $note_entrer ===20){
    echo"vous avez une mention: A \n";
}elseif($note_entrer ==16 || $note_entrer ===17){
    echo"vous avez une mention: B \n";
}elseif($note_entrer ==14 || $note_entrer ===15){
    echo"vous avez une mention: C \n";
}elseif($note_entrer ==12 || $note_entrer ===13){
    echo"vous avez une mention: D \n";
}elseif($note_entrer ==10 || $note_entrer ===11){
    echo"vous avez une mention: E \n";
}elseif($note_entrer ===0 || $note_entrer <=9){
    echo"vous avez une mention: F \n";
}else{
 echo"votre mention n'est pas prise en compte \n";
}