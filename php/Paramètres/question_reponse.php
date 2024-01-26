<?php
declare(strict_types=1);
do {
$compteur=0;
echo "Quel est votre nom?";
$nom=trim(fgets(STDIN));
echo "Bonjour ",$nom,". Vous allez jouer à un jeu de questions-réponses. Tapez 1 pour Les Manga, tapez 2 pour Littérature ou tapez 3 pour quitter.\n";
$nbr=trim(fgets(STDIN));
if ($nbr==1)
{
    Question("Question 1: Qui est le héros de 'Dragon Ball'?\nTapez a pour 'San Goku', tapez b pour 'San Beau Cou' ou tapez c pour 'San Gohan'.\n","a",$compteur);
    $compteur=+Question();
echo "Vous avez trouvé ",$compteur," bonne réponses. Bravo!\n";
echo "Voulez-vous réessayer? Tapez 'r' pour ";
}
elseif ($nbr==2)
{
    echo "Question 1:";
    $reponse=trim(fgets(STDIN));
}
elseif ($nbr==3)
{
    break;
}
else
{
    echo "La commande est erronée, veuillez réessayer.\n";
}
}while ($nbr!=3);

function Question(string $_question, string $_bon, int $_compteur): int
{
    echo $_question;
    $_reponse=trim(fgets(STDIN));
    if ($_reponse==$_bon)
    {
        echo "Bonne réponse!\n";
        $_compteur++;
    }
    else
    {
        echo "Mauvaise réponse.\n";
    }
    return $_compteur;
}
?>