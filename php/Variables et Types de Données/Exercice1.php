<?php
echo "Veuillez entrer votre nom ";
$name = fgets(STDIN);
$name = trim($name);
echo "Bonjour ", $name, ", enchanté!
";
echo "Veuillez entrer votre année de naissance ";
$year = fgets(STDIN);
$year = intval($year);
$age = 2023-$year;
echo "Vous avez ", $age, " ans.
";
echo "Veuillez entrer la température en Celsius ";
$celsius = fgets(STDIN);
$celsius = floatval($celsius);
$fahrenheit = $celsius * 1.8000+ 32.00;
echo "Il fait ", $fahrenheit, "°F.
";
$name1 = "Aerith";
$name2 = "Tifa";
echo "C'est un honneur de vous rencontrer ", $name1, " et ", $name2, "!
";
echo "Veuillez saisir deux nombres entiers ";
$number1 = fgets(STDIN);
$number1 = intval($number1);
$number2 = fgets(STDIN);
$number2 = intval($number2);
$sum = $number1 + $number2;
echo "La somme de ", $number1, " et de ", $number2, " est ", $sum;
?>