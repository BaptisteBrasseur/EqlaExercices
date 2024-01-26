USE Exercice27;
INSERT INTO Joueur (Nom, Prenom, DateNaissance, IdEquipe)
VALUES ('Brasseur', 'Baptiste', '1996/09/22', 2);
INSERT INTO Joueur (Nom, Prenom, DateNaissance, IdEquipe)
VALUES ('Colin', 'Pierre', '1984/07/22', 1);
INSERT INTO Joueur (Nom, Prenom, DateNaissance, IdEquipe)
VALUES ('Jacques', 'Gabriel', '2014/08/22', 2);
INSERT INTO Joueur (Nom, Prenom, DateNaissance, IdEquipe)
VALUES ('Dupont', 'Philip', '1991/12/13', 2);
SELECT * FROM Joueur;
SELECT Joueur.IdJoueur, Joueur.Nom, Joueur.Prenom, Joueur.DateNaissance, Equipe.NomClub FROM Joueur
INNER JOIN Equipe ON Joueur.IdEquipe = Equipe.IdEquipe;