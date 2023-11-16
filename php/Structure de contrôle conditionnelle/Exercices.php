<?php
echo "Veuillez saisir un nombre ";
$nombre = fgets(STDIN);
if ($nombre > 0) {
    echo "Ce nombre est positif.
    ";
}
echo "Quel est votre âge? ";
$age = fgets(STDIN);
if ($age >= 18) {
    echo "Vous êtes majeur.
    ";
} else {
    echo "Vous êtes mineur.
    ";
}
echo "Veuillez saisir un nombre ";
$nombre2 = fgets(STDIN);
if ($nombre2 > 0) {
    echo "Positif
    ";
} elseif ($nombre2 < 0) {
    echo "Négatif
    ";
} else {
    echo "Zéro
    ";
}
echo "Veuillez saisir un nombre entre 0 et 100 ";
$nombre3 = fgets(STDIN);
if ($nombre3 >= 90) {
    echo "Très bien
    ";
} elseif ($nombre3 >= 80 && $nombre3 < 90) {
    echo "Bien
    ";
} elseif ($nombre3 >= 70 && $nombre3 < 80) {
    echo "Satisfaisant
    ";
} else {
    echo "À améliorer
    ";
}
echo "Veuillez saisir un jour de la semaine par son nombre (1 pour lundi, 2 pour mardi, ...) ";
$jour = fgets(STDIN);
$jour = intval($jour);
switch ($jour) {
    case "1":
        echo "Nous sommes lundi.
        ";
        break;
    case "2":
        echo "Nous sommes mardi.
        ";
        break;
    case "3":
        echo "Nous sommes mercredi.
        ";
        break;
    case "4":
        echo "Nous sommes jeudi.
        ";
        break;
    case "5":
        echo "Nous sommes vendredi.
        ";
        break;
    case "6":
        echo "Nous sommes samedi.
        ";
        break;
    case "7":
        echo "Nous sommes dimanche.
        ";
        break;
    default:
        echo "C'est un autre jour de la semaine.
        ";
}
echo "Veuillez saisir un mois de l'année par son nombre (1 pour janvier, 2 pour février, ...) ";
$mois = fgets(STDIN);
$mois = intval($mois);
switch ($mois) {
    case "1":
    case "3":
    case "5":
    case "7":
    case "8":
    case "10":
    case "12":
        echo "Il y a 31 jours dans ce mois.
        ";
        break;
    case "2":
        echo "Il y a 28 ou 29 jours dans ce mois.
        ";
        break;
    case "4":
    case "6":
    case "9":
    case "11":
        echo "Il y a 30 jours dans ce mois.
        ";
        break;
    default:
        echo "C'est un autre mois de l'année.
        ";
}
echo "Veuillez saisir deux nombres. ";
$dividende = fgets(STDIN);
$diviseur = fgets(STDIN);
$quotient = $dividende / $diviseur;
if ($quotient == 0 || 1 || 2 || 3 || 4 || 5 || 6 || 7 || 8 || 9 || 10 || 11 || 12) {
    echo "Le premier nombre est divisible par le second.
    ";
} else {
    echo "Le premier nombre n'est pas divisible par le second.
    ";
}
echo "Veuillez saisir trois nombres ";
$first = fgets(STDIN);
$second = fgets(STDIN);
$third = fgets(STDIN);
if ($first > $second && $first > $third) {
    echo "Le plus grand de ces trois nombres est ", $first, ".";
} elseif ($first < $second && $second > $third) {
    echo "Le plus grand de ces trois nombres est ", $second, ".";
} elseif ($third > $second && $first < $third) {
    echo "Le plus grand de ces trois nombres est ", $third, ".";
} else {
    echo "Aucun nombre n'est plus grand que les autres.
    ";
}
echo "Veuillez saisir un nombre ";
$nombre4 = fgets(STDIN);
if ($nombre4 > 0) {
    $nombre4 = true;
}
switch ($nombre4) {
    case "true":
        echo "Positif
        ";
        break;
    case "0":
        echo "Zéro
        ";
        break;
    default:
        echo "Négatif
        ";
}
echo "Veuillez saisir un nombre entre 0 et 100 ";
$nombre5 = fgets(STDIN);
if ($nombre5 > 90) {
    $nombre5 = 90;
}
if ($nombre5 >= 80 && $nombre5 < 90) {
    $nombre5 = 80;
}
if ($nombre5 >= 70 && $nombre5 < 80) {
    $nombre5 = 70;
}
switch ($nombre5) {
    case "90":
        echo "Très bien
        ";
        break;
    case "80":
        echo "Bien
        ";
        break;
    case "70":
        echo "Satisfaisant
        ";
        break;
    default:
    echo "À améliorer
    ";
}
echo "Veuillez saisir deux nombres ";
$divise = fgets(STDIN);
$div = fgets(STDIN);
$reste = $divise / $div;
if (is_integer($reste)) {
    echo "Le premier nombre est divisible par le second.
    ";
} else {
    echo "Le premier nombre n'est pas divisible par le second.
    ";
}
echo "Veuillez saisir trois nombres ";
$solo = fgets(STDIN);
$duo = fgets(STDIN);
$trio = fgets(STDIN);
$uno = 0;
$dos = 0;
$tres = 0;
if ($solo > $duo) {
    $uno = 1;
} else {
    $uno = -1;
}
if ($solo > $trio) {
    $dos = 1;
} else {
    $dos = -1;
}
if ($duo > $trio) {
    $tres = 1;
} else {
    $tres = -1;
}
if ($uno + $dos == 2) {
    echo "Le plus grand de ces trois nombres est ", $solo, ".";
}
if ($dos + $tres == -2) {
    echo "Le plus grand de ces trois nombres est ", $trio, ".";
}
if ($tres + $uno == 2) {
    echo "Le plus grand de ces trois nombres est ", $uno, ".";
}
if ($dos + $uno == 0) {
    echo "Le plus grand de ces trois nombres est ", $duo, ".";
}
if ($tres + $uno == -2) {
    echo "Le plus grand de ces trois nombres est ", $trio, ".";
} else {
    echo "Aucun nombre n'est plus grand que les autres.
    ";
}
?>