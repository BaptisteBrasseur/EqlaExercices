<?php
$alea = rand(1,100);
$decompte = 1;
//echo "$alea \n";
echo "Choisissez un nombre entre 1 et 100: ";
$nombre = fgets(STDIN);
do {
    $decompte++;
    echo "Mauvaise réponse, veuillez choisir un autre nombre: ";
    $nombre = fgets(STDIN);
} while ($alea != $nombre);
echo "C'est la bonne réponse! Cela vous a pris ", $decompte, " tentatives.";
?>