<?php
$counter=0;
echo "Entrez une chaîne de caractères. Je la transformerais en majuscules ou en minuscules.\n";
$userEntry=trim(fgets(STDIN));
echo $userEntry,"\n";
StringToLowerCase("PHILIPPE!");
StringToUpperCase($userEntry);
StringToLowerCase($userEntry);
do {
    echo "Entrez une chaîne de caractères. Je la transformerais en majuscules ou en minuscules.\n";
    $userEntry=trim(fgets(STDIN));
    echo $userEntry,"\n";
    echo "Tapez 1 pour tout mettre en majuscules ou tapez 2 pour tout mettre en minuscules.\n";
    $userEntry2=trim(fgets(STDIN));
        if ($userEntry2 == 1) {
            StringToUpperCase($userEntry);
        }
        elseif ($userEntry2 == 2) {
            StringToLowerCase($userEntry);
        }
        else {
            echo "La commande est erronée, veuillez réessayer.\n";
        }
    echo "Souhaitez-vous rentrer une nouvelle chaîne de caractères?\nTapez r pour recommencer ou tapez q pour quitter.\n";
    $userEntry3=trim(fgets(STDIN));
        if ($userEntry3 == "r") {
            continue;
        }
        elseif ($userEntry3 == "q") {
            break;
        }
        else {
            echo "La commande est erronée, veuillez réessayer.";
        }
} while ($userEntry != "q" || $userEntry2 != "q" || $userEntry3 != "q");
function StringToUpperCase(string $_strEntry)
{
    $_upperString="";
    global $counter;
    $counter++;
    for ($i=0;$i<strlen($_strEntry);$i++)
    {
        $_firstChar=ord($_strEntry[$i]);
        if ($_firstChar>96 && $_firstChar<123)
        {
            $_firstChar-=32;
        }
        $_firstChar=chr($_firstChar);
        $_upperString=$_upperString.$_firstChar;
    }
    echo $_upperString,"\n";
}
function StringToLowerCase(string $_strEntry)
{
    $_lowerString="";
    global $counter;
    $counter++;
    for ($i=0;$i<strlen($_strEntry);$i++)
    {
        $_firstChar=ord($_strEntry[$i]);
        if ($_firstChar>64 && $_firstChar<91)
        {
            $_firstChar+=32;
        }
        $_firstChar=chr($_firstChar);
        $_lowerString=$_lowerString.$_firstChar;
    }
    echo $_lowerString,"\n";
}
?>