<?php
do {
    echo "Pour quelle fête faites-vous votre commande?\n";
    $fete = trim(fgets(STDIN));
    if ($fete == "noël") {
        do {
        echo "Je peux vous proposer 3 aliments. Tapez 1 pour le gâteau, tapez 2 pour le caramel, tapez 3 pour le nougat ou tapez 4 si vous n'aimez aucun des 3.\n";
        $sucre = trim(fgets(STDIN));
            echo match ($sucre) {
                "1" => "Ce gâteau vaut 2 000 calories.",
                "2" => "Ce caramel vaut 400 calories.",
                "3" => "Ce nougat vaut 300 calories.",
                "4" => "Mes excuses, je n'ai rien d'autre en stock.",
                default => "La valeur est erronée.\n",
            };
        }while ($sucre < 1 || $sucre > 4);
    } elseif ($fete == "pâques") {
        do {
        echo "Je peux vous proposer 3 aliments. Tapez 1 pour le sablé, tapez 2 pour les chips, tapez 3 pour les frites ou tapez 4 si vous n'aimez aucun des 3.\n";
        $sale = trim(fgets(STDIN));
    echo match ($sale) {
        "1" => "Ce sablé vaut 200 calories.",
        "2" => "Ces chips valent 600 calories.",
        "3" => "Ces frites valent 1 300 calories.",
        "4" => "Mes excuses, je n'ai rien d'autre en stock.",
        default => "La valeur est erronée.\n",
    };
        }while ($sale < 1 || $sale > 4);
    } elseif ($fete == "halloween") {
        do {
            echo "Je peux vous proposer 3 aliments. Tapez 1 pour le sablé, tapez 2 pour les chips, tapez 3 pour les frites ou tapez 4 si vous n'aimez aucun des 3.\n";
            $sale = trim(fgets(STDIN));
            echo match ($sale) {
                "1" => "Ce sablé vaut 200 calories.",
                "2" => "Ces chips valent 600 calories.",
                "3" => "Ces frites valent 1 300 calories.",
                "4" => "Mes excuses, je n'ai rien d'autre en stock.",
                default => "La valeur est erronée.\n",
            };
        }while ($sale < 1 || $sale > 4);
    }
    else {
        echo "La valeur est erronée, veuillez réessayer.\n";
    }
}while ($fete != "noël" && $fete != "pâques" && $fete != "halloween");