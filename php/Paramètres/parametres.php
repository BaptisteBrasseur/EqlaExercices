<?php
//Exercice 1
/*function DisplayPyramid()
{
        echo "    *    \n";
        echo "   ***   \n";
        echo "  *****  \n";
        echo " ******* \n";
        echo "*********\n";
}
DisplayPyramid();
DisplayPyramid(); */
function DisplayPyramid()
{
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}
DisplayPyramid();
DisplayPyramid();
function Reverse()
{
    for ($i = 5; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}
Reverse();
//Exercice2
function CalculateFactorial()
{
    $total=1;
    for ($i = 1; $i <= 5; $i++) {
        $total *=$i;
    }
    echo "La factorielle de 5 vaut ",$total,"\n";
}
CalculateFactorial();
CalculateFactorial();
//Exercice3
function GuessGame()
{
    $alea = rand(1,10);
    echo "Choisissez un nombre entre 1 et 10: ";
    $nombre = fgets(STDIN);
    do {
        echo "Mauvaise réponse, veuillez choisir un autre nombre: ";
        $nombre = fgets(STDIN);
    } while ($alea != $nombre);
    echo "C'est la bonne réponse!\n";
}
GuessGame();
GuessGame();
?>