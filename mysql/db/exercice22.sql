use Pays;
SELECT pays.name AS pays, continent.name AS continent FROM Pays INNER JOIN Continent ON Pays.continent= Continent.code;