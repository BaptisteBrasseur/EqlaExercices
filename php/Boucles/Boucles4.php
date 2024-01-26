<?php
do {
    echo "Choisissez parmi ces options: 
    1. Afficher, 2. Ajouter, 3. Quitter \n";
    $nombre = fgets(STDIN);
    if ($nombre != 1 && $nombre != 2 && $nombre != 3) {
        echo "Entrer un nombre entre 1 et 3. \n";
    }
} while ($nombre != 3);
?>