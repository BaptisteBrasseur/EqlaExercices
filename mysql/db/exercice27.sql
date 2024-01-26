DROP DATABASE IF EXISTS Exercice27;
CREATE DATABASE Exercice27 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE Exercice27;
CREATE TABLE Equipe
(
    IdEquipe int Unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NomClub varchar(30) NOT NULL,
    Localite varchar(30) NOT NULL,
    Division TINYINT UNSIGNED NOT NULL
);
CREATE TABLE Joueur
(
    IdJoueur int Unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nom varchar(30) NOT NULL,
    Prenom varchar(30) NOT NULL,
    DateNaissance date NOT NULL,
    IdEquipe int Unsigned NOT NULL,
    FOREIGN KEY (IdEquipe) REFERENCES Equipe(IdEquipe)
);