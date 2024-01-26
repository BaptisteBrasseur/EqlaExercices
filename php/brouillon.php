<?php
function Erreur()
{
echo "Erreur, veuillez réessayer.\n";
}
function Factorio()
{
    $total=1;
    echo "Choisissez un nombre entre 1 et 10: ";
        $no = trim(fgets(STDIN));
        if ($no < 1 || $no > 10)
        {
            Erreur();
        }
        else {
            for ($i = 1; $i <= $no; $i++) {
                $total *= $i;
            }
            echo "La factorielle de ", $no, " vaut ", $total, "\n";
        }
}

Factorio();
Factorio();

for ($i = 1; $i <= 10; $i++) {
    if ($i%2 != 0) {
        continue;
    }
    echo $i, " est un nombre pair.\n";
}

$alea = rand(1,10);
echo "$alea \n";
echo "Choisissez un nombre entre 1 et 10: ";
$nombre = trim(fgets(STDIN));
while ($alea != $nombre) {
    Erreur();
    $nombre = trim(fgets(STDIN));
}
echo "C'est la bonne réponse!\n";

$capitale = "";
echo "Quelle est la capitale de la Bolivie?\n";
do {
    $capitale = trim(fgets(STDIN));
    if ($capitale != "Bogota")
    {
        Erreur();
    }
}while ($capitale != "Bogota");
echo "Bon sang, c'est vrai! Il sait tout!\n";
?>