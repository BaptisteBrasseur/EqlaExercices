<?php
$nombre = 0;
$total = 0;
while ($nombre >= 0) {
    $total=$total+$nombre;
    echo "Veuillez saisir un nombre positif ou nul: ";
    $nombre = fgets(STDIN);
}
echo "Le total vaut ", $total," \n";
?>