<?php
$total = 0;
$compteur = 0;
while (true) {
    echo "Veuillez saisir une note entre 0 et 20\n";
    $note = fgets(STDIN);
    if ($note < 0) {
        break;
    }
    elseif ($note > 20) {
        echo "La note n'est pas valide, elle ne sera pas comptée.\n";
        }
    else {
        $total = $total+$note;
    $compteur++;
    }
}
$moyenne = $total/$compteur;
echo "La moyenne de la classe est ", $moyenne, ".";
?>
