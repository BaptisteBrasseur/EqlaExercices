use BlindCode;
SELECT Sexe, COUNT(Sexe) AS Total FROM ELEVE GROUP BY Sexe;
SELECT nationalite, COUNT(nationalite) AS Total FROM ELEVE GROUP BY nationalite;