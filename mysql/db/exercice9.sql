use Blindcode;
SELECT * FROM Eleve WHERE naissance > '1980/12/31' AND naissance < '1990/01/01';
SELECT * FROM Eleve WHERE naissance <= '1980/12/31' OR naissance >= '1990/01/01';
SELECT * FROM Eleve WHERE NOT(naissance > '1980/12/31' AND naissance < '1990/01/01');