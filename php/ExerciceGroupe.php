<?php
$inf = 1;
$sup = 100;
$compteur = 0;
do {
do {
    echo "Tapez 1 pour jouer, tapez 2 pour aller dans les options ou tapez 3 pour quitter.\n";
    $enter = trim(fgets(STDIN));
    if ($enter != 1 && $enter != 2 && $enter != 3)
    {
        echo "La commande est erronée.\n";
    }
    elseif ($enter == 1)
    {
        $alea = rand($inf,$sup);
//echo "$alea \n";
        do {
            echo "Devinez un nombre entre ", $inf, " et ", $sup,"\n";
            $nombre = fgets(STDIN);
            $compteur++;
            if (is_numeric($nombre) || ($nombre=="q"))
            {
                if (( $nombre>=0 && $nombre<=100)||$nombre=="q")
                {
                        if ($nombre == "q") {
                            break;
                        } elseif ($nombre < $alea) {
                            echo "Votre nombre est trop petit, veuillez réessayer.\n";
                        } elseif ($nombre > $alea) {
                            echo "Votre nombre est trop grand, veuillez réessayer.\n";
                        } else {
                            echo "Félicitations, vous avez deviné le nombre en ", $compteur, " tentatives.\n";
                            break;
                        }
                }
            }
            else {
                echo "La commande est erronée.\n";
            }
        } while ($nombre != $alea);
    }
    elseif ($enter == 2) {
        do {
            echo "Tapez 1 pour changer la borne inférieure, tapez 2 pour changer la borne supérieure, tapez 3 pour changer les bornes ou tapez 4 pour revenir au menu principal\n";
            $option = trim(fgets(STDIN));
            if ($option >= 1 && $option <= 4 || $option == "q") {
                if ($option == "q")
                {
                    break;
                }
                elseif ($option == 1) {
                    do {
                        echo "Veuillez saisir un nouveau nombre comme borne inférieure.\n";
                        $inf = trim(fgets(STDIN));
                        if (is_numeric($inf) || ($inf == "q"))
                        {
                            if ($inf == "q") {
                                break;
                            } elseif ($inf >= $sup) {
                                echo "Ce nombre égale ou dépasse la borne supérieur et ne peut pas être validé.\n";
                            } else {
                                echo "La nouvelle borne inférieur est ", $inf, ".\n";
                            }
                        }
                        else {
                            echo "La commande est erronée.\n";
                        }
                    } while ($inf >= $sup) ;
                }
                elseif ($option == 2) {
                    do {
                        echo "Veuillez saisir un nouveau nombre comme borne supérieure.\n";
                        $sup = trim(fgets(STDIN));
                        if (is_numeric($sup) || ($sup == "q"))
                        {
                        if ($sup == "q") {
                            break;
                        }
                        elseif ($sup <= $inf) {
                            echo "Ce nombre égale ou dépasse la borne inférieur et ne peut pas être validé.\n";
                        } else {
                            echo "La nouvelle borne supérieur est ", $sup, ".\n";
                            }
                        }
                        else {
                            echo "La commande est erronée.\n";
                        }
                    } while ($sup <= $inf);
                }
                elseif ($option == 3) {
                    do {
                        echo "Veuillez saisir deux nouveaux nombres comme borne inférieure et supérieure.\n";
                        $inf = trim(fgets(STDIN));
                        $sup = trim(fgets(STDIN));
                        if (is_numeric($inf) && (is_numeric($inf)) || ($inf == "q") && ($sup == "q")) {
                            if ($inf == "q" || $sup == "q") {
                                break;
                            } elseif ($inf >= $sup) {
                                echo "Ces nombres ne sont pas valides.\n";
                            } else {
                                echo "Les nouvelles bornes sont ", $inf, " et ", $sup, ".\n";
                            }
                        }
                        else {
                            echo "La commande est erronée.\n";
                        }
                    } while ($inf >= $sup);
                }
                elseif ($option == 4) {
                    break;
                }
                else {
                    echo "La commande est erronée.\n";
                }
            }
        } while (!($option >= 1 && $option <= 4 || $option == "q")) ;
    }
} while (!($enter >= 1 && $enter <= 3));
} while ($enter != 3)
?>