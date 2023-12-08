<?php
// 4 amis doivent s'offrir chacun un cadeau. Ne peux pas s'offrir cadeau à soi-même.
//Ne peux pas recevoir 2 cadeaux de 2 personnes différentes. Tirage sans remise
/* echo "Veuillez saisir les noms des quatres amis ";// on rentre les noms
$premier = fgets(STDIN);
$premier = trim($premier);
$deuxieme = fgets(STDIN);
$deuxieme = trim($deuxieme);
$troisieme = fgets(STDIN);
$troisieme = trim($troisieme);
$quatrieme = fgets(STDIN);
$quatrieme = trim($quatrieme);
$people = 4;
$cadeaux = 4;
$amis = array($premier, $deuxieme, $troisieme, $quatrieme); // initialisation d'un tableau des amis
//$amis = shuffle($premier, $deuxieme, $troisieme, $quatrieme);
while(count($amis) > 0 ){ // on boucle tant que le nombre d'amis est supérieur à 0
    $rand = mt_rand(1,$people); // on génère un nombre aléatoire entre 1 et le nombre de personnes, soit 4
    if(!in_array($rand,$amis)) {  // on vérifie si le nombre à déjè été tiré
        $amis[] = $rand; // on insère le numéro dans le tableau des amis
        echo 'ami '.$rand.' donne un cadeau à ', $rand, '.\n'; // on affiche la valeur
    }
}
echo "Mettez une année "; A oublié d'afficher la phrase
$years = readline("Mettez une année ");
if ($years % 4) echo "nnée normale"; // Il manque une lettre
else echo "année bissextile";
*/
echo "Veuillez saisir en chiffre le jour et le mois de votre naissance\n";
$jour = fgets(STDIN);
$jour = intval($jour);
if ($jour < 1 || $jour > 31) {
    echo "Ce jour n'existe pas, veuillez entrer une date correcte.\n";
} else {
    $mois = fgets(STDIN);
    $mois = intval($mois);
    if ($mois < 1 || $mois > 12) {
        echo "Ce mois n'existe pas, veuillez entrer une date correcte.\n";
    } else {
        switch ($mois) {
            case "1":
                if ($jour >= 1 && $jour < 21) {
                    echo "Vous êtes du signe du Capricorne.\n";
                } else {
                    echo "Vous êtes du signe du Verseau.\n";
                }
                break;
            case "3":
                if ($jour >= 1 && $jour < 21) {
                    echo "Vous êtes du signe des Poissons.\n";
                } else {
                    echo "Vous êtes du signe du Bélier.\n";
                }
                break;
            case "5":
                if ($jour >= 1 && $jour < 21) {
                    echo "Vous êtes du signe du Taureau.\n";
                } else {
                    echo "Vous êtes du signe des Gémeaux.\n";
                }
                break;
            case "7":
                if ($jour >= 1 && $jour < 23) {
                    echo "Vous êtes du signe du Cancer.\n";
                } else {
                    echo "Vous êtes du signe du Lion.\n";
                }
                break;
            case "8":
                if ($jour >= 1 && $jour < 23) {
                    echo "Vous êtes du signe du Lion.\n";
                } else {
                    echo "Vous êtes du signe de la Vierge.\n";
                }
                break;
            case "10":
                if ($jour >= 1 && $jour < 23) {
                    echo "Vous êtes du signe de la Balance.\n";
                } else {
                    echo "Vous êtes du signe du Sagittaire.\n";
                }
                break;
            case "12":
                if ($jour >= 1 && $jour < 22) {
                    echo "Vous êtes du signe du Sagittaire.\n";
                } else {
                    echo "Vous êtes du signe du Capricorne.\n";
                }
                break;
            case "2":
                if ($jour == 30 || $jour == 31) {
                    echo "Ce jour n'existe pas, veuillez entrer une date correcte.\n";
                } elseif ($jour >= 1 && $jour < 20) {
                    echo "Vous êtes du signe du Verseau.\n";
                } else {
                    echo "Vous êtes du signe des Poissons.\n";
                }
                break;
            case "4":
                if ($jour == 31) {
                    echo "Ce jour n'existe pas, veuillez entrer une date correcte.\n";
                } elseif ($jour >= 1 && $jour < 21) {
                    echo "Vous êtes du signe du Bélier.\n";
                } else {
                    echo "Vous êtes du signe du Taureau.\n";
                }
                break;
            case "6":
                if ($jour == 31) {
                    echo "Ce jour n'existe pas, veuillez entrer une date correcte.\n";
                } elseif ($jour >= 1 && $jour < 22) {
                    echo "Vous êtes du signe des Gémeaux.\n";
                } else {
                    echo "Vous êtes du signe du Cancer.\n";
                }
                break;
            case "9":
                if ($jour == 31) {
                    echo "Ce jour n'existe pas, veuillez entrer une date correcte.\n";
                } elseif ($jour >= 1 && $jour < 23) {
                    echo "Vous êtes du signe de la Vierge.\n";
                } else {
                    echo "Vous êtes du signe de la Balance.\n";
                }
                break;
            case "11":
                if ($jour == 31) {
                    echo "Ce jour n'existe pas, veuillez entrer une date correcte.\n";
                } elseif ($jour >= 1 && $jour < 23) {
                    echo "Vous êtes du signe du Scorpion.\n";
                } else {
                    echo "Vous êtes du signe du Sagittaire.\n";
                }
                break;
            default:
                echo "Cette date n'existe pas, veuillez entrer une date correcte.\n";
        }
    }
}
?>