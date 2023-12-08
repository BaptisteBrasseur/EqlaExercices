<?php
$compteur = 0;
$limit = 3;
while (true) {
    echo "Veuillez saisir un nouveau mot de passe\n";
    $passe = trim(fgets(STDIN));
    $compteur++;
    echo "Voulez-vous définir ", $passe, " comme étant votre nouveau mot de passe?\nAppuyez sur 1 pour valider.\n";
    $valide = trim(fgets(STDIN));
    if ($valide == 1) {
        echo "Votre nouveau mot de passe est ", $passe;
        break;
    }
    else {
        echo "Il vous reste ", $limit-$compteur, " tentatives.\n";
    }
    if ($compteur == $limit) {
        echo "Il ne vous reste plus de tentatives. Vous ne pouvez plus entrer de nouveaux mots de passe.";
        break;
    }
}
?>