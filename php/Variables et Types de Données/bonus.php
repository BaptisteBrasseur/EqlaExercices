
<?php
/* Début
STRING name1
STRING name2
ENTIER number1
ENTIER number2
ENTIER somme
RATIONNEL quotient
ENTIER produit
ENTIER difference
RATIONNEL moyenne
AFFICHER "Veuillez rentrer les noms des deux poivrots ainsi que les 2 notes qu'ils ont reçus à leurs dernier contrôle "
LIRE name1
LIRE name2
LIRE number1
LIRE number2
AFFICHER "Bonjour ", name1, " et ", name2, "."
AFFICHER "Vous avez eu respectivement ", number1, " et ", number2, " au dernier contrôle routier."
somme = number1+number2
quotient = number1/number2
produit = number1*number2
difference = number1-number2
moyenne = somme/2
AFFICHER "La somme de vos résultats vaut ", somme, "."
AFFICHER "Le quotient de vos résultats vaut ", quotient, "."
AFFICHER "Le produit de vos résultats vaut ", produit, "."
AFFICHER "La différence de vos résultats vaut ", difference, "."
AFFICHER "La moyenne de vos résultats vaut ", moyenne, "."
AFFICHER "C'était pas ouf en vrai, j'espère que vous ferez mieux la prochaine fois!"
Fin */
echo "Veuillez rentrer les noms des deux poivrots ainsi que les 2 notes qu'ils ont reçus à leurs dernier contrôle ";
$name1 = fgets(STDIN);
$name1 = trim($name1);
$name2 = fgets(STDIN);
$name2 = trim($name2);
$number1 = fgets(STDIN);
$number1 = intval($number1);
$number2 = fgets(STDIN);
$number2 = intval($number2);
echo "Bonjour ", $name1, " et ", $name2, ".
";
echo "Vous avez eu respectivement ", $number1, " et ", $number2, " au dernier contrôle routier.
";
$sum = $number1+$number2;
$quotient = $number1/$number2;
$product = $number1*$number2;
$difference = $number1-$number2;
$average = $sum/2;
echo "La somme de vos résultats vaut ", $sum, ".
";
echo "Le quotient de vos résultats vaut ", $quotient, ".
";
echo "Le produit de vos résultats vaut ", $product, ".
";
echo "La différence de vos résultats vaut ", $difference, ".
";
echo "La moyenne de vos résultats vaut ", $average, ".
";
echo "C'était pas ouf en vrai, j'espère que vous ferez mieux la prochaine fois!";
?>