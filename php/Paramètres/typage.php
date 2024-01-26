<?php
//Exercice1
function DisplayPyramid(int $roof, int $floor)
{
    for ($i = $roof; $i <= $floor; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}
DisplayPyramid(1,5);
DisplayPyramid(2,10);
DisplayPyramid(3,15);
//Exercice2
function CalculateFactorial(int $number)
{
    $total=1;
    for ($i = 1; $i <= $number; $i++) {
        $total *=$i;
    }
    echo "La factorielle de ",$number," vaut ",$total,"\n";
}
CalculateFactorial(5);
CalculateFactorial(8);
CalculateFactorial(12);
//Exercice3
function GuessGame(int $minValue,int $maxValue)
{
    $alea = rand($minValue,$maxValue);
    $decompte = 1;
    echo "$alea \n";
    echo "Choisissez un nombre entre ",$minValue," et ",$maxValue,": ";
    $nombre = fgets(STDIN);
        do {
            if ($nombre < $minValue || $nombre > $maxValue) {
                echo "La valeur n'est pas valide, veuillez réessayer: ";
                $nombre = fgets(STDIN);
            }
            else {
                $decompte++;
                echo "Mauvaise réponse, veuillez choisir un autre nombre: ";
                $nombre = fgets(STDIN);
            }
        } while ($alea != $nombre);
        echo "C'est la bonne réponse! Cela vous a pris ", $decompte, " tentatives.\n";
}
GuessGame(1,10);
GuessGame(2,20);
?>