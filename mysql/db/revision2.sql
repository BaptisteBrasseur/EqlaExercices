DROP DATABASE IF EXISTS Biblio;
CREATE DATABASE Biblio;
USE Biblio;
CREATE TABLE Auteur
(
    IdAuteur int Unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nom varchar(30) NOT NULL,
    Prenom varchar(30) NOT NULL,
    DateNaissance date NOT NULL,
    Nationalite varchar(20) NOT NULL,
);
CREATE TABLE Livre
(
    IdLivre int Unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Titre varchar(30) NOT NULL,
    ISBN varchar(30) NOT NULL,
    Langue varchar(20) NOT NULL,
    AnneePublication SMALLINT UNSIGNED NOT NULL,
    Pages SMALLINT UNSIGNED NOT NULL,
    Exemplaires SMALLINT UNSIGNED,
    FOREIGN KEY (IdAuteur) REFERENCES Livre(IdAuteur)
);
CREATE TABLE Theme
(
    IdTheme int Unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Libelle varchar(20) NOT NULL,
    FOREIGN KEY (IdLivre) REFERENCES Livre(IdLivre)
);
CREATE TABLE Lecteur
(
    IdLecteur int Unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nom varchar(30) NOT NULL,
    Prenom varchar(30) NOT NULL,
    DateNaissance date NOT NULL,
    FOREIGN KEY (IdLivre) REFERENCES Livre(IdLivre)
);
CREATE TABLE Emprunt
(
    IdEmprunt int Unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    DateDebut date NOT NULL,
    DateFin date NOT NULL,
    Actif boolean NOT NULL DEFAULT 1,
    FOREIGN KEY (IdLivre) REFERENCES Livre(IdLivre)
);
INSERT INTO Auteur (Nom,Prenom,DateNaissance,Nationalite)
VALUES ('Leblanc','Maurice', '1888-05-23', 'Belge');
INSERT INTO Auteur (Nom,Prenom,DateNaissance,Nationalite)
VALUES ('Wells','Orson', '1905-09-18', 'Anglais');
INSERT INTO Livre (Titre,ISBN,Langue,AnneePublication,Pages,Exemplaires,IdAuteur)
VALUES ('Miche', 'Liège', 'français', 1923, 202, 12, 1);
INSERT INTO Theme (Libelle,IdLivre)
VALUES ('Programmation',1);
INSERT INTO Lecteur (Nom,Prenom,DateNaissance,IdLivre)
VALUES ('Leblanc','Maurice', '1888-05-23', 1);
INSERT INTO Emprunt (DateDebut,DateFin,Actif,IdLivre)
VALUES ('2020-01-01', '2023-05-23', 1, 1);