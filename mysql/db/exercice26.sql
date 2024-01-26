USE Exercice26;
CREATE TABLE Equipe
(
    IdEquipe int Unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NomClub varchar(30) NOT NULL,
    Localite varchar(30) NOT NULL,
    Division TINYINT UNSIGNED NOT NULL
)