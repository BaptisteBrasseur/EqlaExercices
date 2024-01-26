<?php
declare(strict_types=1);
do {
    echo "Veuillez entrer deux nombres.\n";
    $nombre=floatval(trim(fgets(STDIN)));
    $number=floatval(trim(fgets(STDIN)));
    echo "Tapez + pour les additionner, - pour les soustraire, * pour les multiplier, / pour les diviser ou q pour quitter.";
    $operation=trim(fgets(STDIN));
    if ($operation=="/")
    {
        $quotient=Division($nombre,$number);
        echo "La division de ",$nombre," par ",$number," vaut ",$quotient,"\n";
    }
    elseif ($operation=="-")
    {
        $total=Soustaction($nombre,$number);
        echo "La soustraction de ",$nombre," par ",$number," vaut ",$total,"\n";
    }
    elseif ($operation=="+")
    {
        $somme=Addition($nombre,$number);
        echo "L'addition de ",$nombre," par ",$number," vaut ",$somme,"\n";
    }
    elseif ($operation=="*")
    {
        $produit=Multiplication($nombre,$number);
        echo "La multiplication de ",$nombre," par ",$number," vaut ",$produit,"\n";
    }
    elseif ($operation=="q")
    {
        break;
    }
    else
    {
        echo "Opération impossible, veuillez réessayer.\n";
    }
    do {
        echo "Tapez r pour recommencer avec d'autres nombres ou q pour quitter.\n";
        $continuer=trim(fgets(STDIN));
        if ($continuer=="q")
        {
            break;
        }
        elseif ($operation=="r")
        {
            continue;
        }
        else
        {
            echo "Opération impossible, veuillez réessayer.\n";
        }
    }while($continuer!="r");
}while ($operation!="q");
function Division(float $_nombre,float $_number):float
{
        if ($_number==0)
        {
            echo "Opération impossible, veuillez réessayer.\n";
            $_quotient=0;
        }
        else {
            $_quotient=$_nombre/$_number;
        }
    return $_quotient;
}
function Soustaction(float $_nombre,float $_number):float
{
    return $_nombre-$_number;
}
function Addition(float $_nombre,float $_number):float
{
    return $_nombre+$_number;
}
function Multiplication(float $_nombre,float $_number):float
{
    return $_nombre*$_number;
}
?>