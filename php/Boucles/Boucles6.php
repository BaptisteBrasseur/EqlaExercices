<?php
$total = 1;
echo "Veuillez saisir un nombre positif: ";
$nombre = trim(fgets(STDIN));
for ($i = 1; $i <= $nombre; $i++) {
    $total = $total*$i;
}
echo "La factorielle de ",$nombre," vaut ",$total, "\n";
?>
