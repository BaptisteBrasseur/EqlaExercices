<?php
$total = 0;
    while (true) {
        echo "Veuillez saisir une note entre 0 et 20\n";
        $note = fgets(STDIN);
        if ($note < 0 || $note > 20) {
            echo "La note n'est pas valide, elle ne sera pas comptée.\n";
            continue;
        }
            $total = $total + $note;
            echo "Avez-vous saisi toutes les notes voulues? Tapez stop pour arrêter le programme. ";
            $valide = trim(fgets(STDIN));
            if ($valide == "stop") {
                echo "Le total des notes vaut ", $total, ".";
                break;
            }
}
?>