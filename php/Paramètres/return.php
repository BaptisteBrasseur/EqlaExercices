<?php
declare(strict_types=1);
$counter=0;
echo "Quelle est la capitale de la Belgique?\n";
$userInput=trim(fgets(STDIN));
$userInput=StringToLowerCase($userInput);
if ($userInput=="bruxelles"){
    echo "Bravo, bonne réponse!";
}
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
function StringToLowerCase(string $_strEntry):string
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
    return $_lowerString;
}
?>