use ventes;
SELECT ProduitV2.nom AS produit, Categorie.nom AS catégorie FROM ProduitV2
INNER JOIN Categorie ON Categorie.IdCategorie= ProduitV2.IdCategorie
ORDER BY produit;