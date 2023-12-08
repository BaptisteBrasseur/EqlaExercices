<?php
echo "Veuillez saisir une année: ";
$year = fgets(STDIN);
if ($year%400 == 0) {
    echo "L'année est bissextile.";
} elseif ($year%100 == 0) {
    echo "L'année n'est pas bissextile.";
} elseif ($year%4 == 0) {
        echo "L'année est bissextile.";
} else {
    echo "L'année n'est pas bissextile'.";
}
?>