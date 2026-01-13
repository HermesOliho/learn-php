<?php
echo "Ici, vous pouvez connaître votre mention à partir de vos notes !\n";
$notes = (float) readline("Veuillez entrer la note obtenue (entre 0 et 20) : ");

if ($notes < 20 && $notes >= 0) {
    if ($notes >= 18)
        echo "Mention A !";
    elseif ($notes >= 16)
        echo "Mention B !";
    elseif ($notes >= 14)
        echo "Mention C !";
    elseif ($notes >= 12)
        echo "Mention D !";
    elseif ($notes >= 10)
        echo "Mention E !";
    else
        echo "Mention F !";
} else {
    echo "Vous devez entre nombre compris entre 0 et 20 !";
}
