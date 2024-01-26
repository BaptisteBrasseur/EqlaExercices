<?php
echo "Veuillez saisir un nombre positif: ";
$nombre = trim(fgets(STDIN));
for ($i = 1; $i <= 10; $i++) {
    echo $nombre," x ",$i," = ",($nombre*$i), "\n";
}
?>
