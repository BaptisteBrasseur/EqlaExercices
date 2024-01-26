use BlindCode;
SELECT formation.nom AS formation, Count(eleve.formation_id) AS NBEleves FROM formation
INNER JOIN eleve ON formation.id = eleve.formation_id
GROUP BY eleve.formation_id
ORDER BY Count(eleve.formation_id) DESC;