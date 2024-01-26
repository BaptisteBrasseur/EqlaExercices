use Localites;
SELECT * FROM Localite WHERE cp = 4280;
SELECT * FROM Localite WHERE cp = 4280 AND (commune LIKE 'b%' OR commune LIKE 'a%');
SELECT cp, commune FROM Localite WHERE cp >= 4000 AND cp <= 4999;