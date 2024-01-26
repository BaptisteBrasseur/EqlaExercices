use ventes;
SELECT Categorie, SUM(Stock) AS Total FROM Produit GROUP BY Categorie;