use BlindCode;
SELECT nom, prenom, YEAR(CURDATE())-YEAR(Naissance) AS Age FROM Eleve;
SELECT Nom, Prenom, YEAR(CURDATE())-YEAR(Naissance) AS Age FROM Eleve ORDER BY Naissance;
SELECT Nom, Prenom, YEAR(CURDATE())-YEAR(Naissance) AS Age FROM Eleve ORDER BY Naissance DESC;
SELECT Nom, Prenom, YEAR(CURDATE())-YEAR(Naissance) AS Age FROM Eleve WHERE formation_id = 1 ORDER BY Naissance;
SELECT Nom, Prenom, YEAR(CURDATE())-YEAR(Naissance) AS Age FROM Eleve WHERE formation_id = 1 ORDER BY Naissance DESC;