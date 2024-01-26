use ventes;
SELECT MAX(prix) FROM Produit;
SELECT MIN(prix) FROM Produit;
SELECT SUM(prix * stock) AS Total FROM Produit;
SELECT SUM(stock) AS Total FROM Produit;
use BlindCode;
    SELECT COUNT(nom) AS nb_eleves FROM Eleve WHERE YEAR(CURDATE())-YEAR(Naissance) > 25;