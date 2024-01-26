use Pays;
DESC Pays;
SELECT Continent, COUNT(name) AS Total FROM Pays GROUP BY Continent;