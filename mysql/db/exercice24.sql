use BlindCode2;
SELECT eleve.nom AS nom, eleve.prenom AS prenom, formation.nom AS formation, eleve_formation.date_inscription AS inscription FROM eleve_formation
INNER JOIN eleve ON eleve_formation.eleve_id = eleve.id
INNER JOIN formation ON eleve_formation.formation_id = formation.id;