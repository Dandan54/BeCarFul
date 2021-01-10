DROP DATABASE IF EXISTS auto_ecole;
CREATE DATABASE auto_ecole;
USE auto_ecole;

CREATE TABLE eleve (
    ideleve INT(3) NOT NULL auto_increment,
    prenomEleve VARCHAR(30),
    nomEleve VARCHAR(30),
    adresse VARCHAR(60),
    cp INT(5),
    ville VARCHAR(30),
    tel VARCHAR(20),
    mail VARCHAR(40),
    d_naissance DATE,
    PRIMARY KEY (ideleve)
);
CREATE TABLE moniteur (
    idmoniteur int(3) NOT NULL auto_increment,
    prenomMoniteur VARCHAR(30),
    nomMoniteur VARCHAR(30),
    adresse VARCHAR(60),
    cp INT(5),
    ville VARCHAR(30),
    tel VARCHAR(20),
    mail VARCHAR(40),
    d_naissance DATE,
    d_embauche DATE,
    salaire FLOAT,
    PRIMARY KEY (idmoniteur)
);
CREATE TABLE voiture (
    idvoiture INT(3) NOT NULL auto_increment,
    marque VARCHAR(30),
    modele VARCHAR(30),
    immatriculation VARCHAR(10),
    carburant VARCHAR(20),
    d_miseCirculation DATE,
    typeVoiture VARCHAR(20),
    kilometrage FLOAT,
    PRIMARY KEY (idvoiture)
);
CREATE TABLE formule (
    idformule INT(3) auto_increment,
    libelle VARCHAR(30),
    prix FLOAT,
    PRIMARY KEY (idformule)
);
CREATE TABLE coursConduite (
    idconduite INT(3) auto_increment,
    dateCoursConduite DATE,
    heureDebConduite TIME,
    heureFinConduite TIME,
    PRIMARY KEY (idconduite)
);
CREATE TABLE coursCode (
    idcode INT(3) auto_increment,
    dateCoursCode DATE,
    heureDebCode TIME,
    heureFinCode TIME,
    PRIMARY KEY (idcode)
);
CREATE TABLE salle (
    idsalle INT(3) auto_increment,
    nomSalle VARCHAR(30),
    nbPlace INT(2),
    PRIMARY KEY (idsalle)
);
CREATE TABLE examenConduite (
    idexaconduite INT(3) auto_increment,
    dateExaConduite DATE,
    heureDebExaConduite TIME,
    heureFinExaConduite TIME,
    resultatExaConsuite VARCHAR(30),
    PRIMARY KEY (idexaconduite)
);
CREATE TABLE examenCode (
    idexacode INT(3) auto_increment,
    dateExaCode DATE,
    heureDebExaCode TIME,
    heureFinExaCode TIME,
    resultatExaCode VARCHAR(30),
    PRIMARY KEY (idexacode)
);
CREATE TABLE user (
    iduser int(3) not null auto_increment,
    nom varchar(30),
    prenom varchar(30),
    email varchar(100),
    mdp varchar(255),
    droits varchar(30),
    primary key (iduser)
);

INSERT INTO eleve VALUES 
    ();

INSERT INTO moniteur VALUES
    ();

INSERT INTO voiture VALUES
    ();

INSERT INTO formule VALUES
    ();

INSERT INTO moniteur VALUES
    ();

INSERT INTO user VALUES
    (null, "Ben", "Oka", "a@gmail.com", "12345", "user"),
    (null, "Guelin", "Michel", "gm@gmail.com", "12345", "admin"),
    (null, "Doreau", "Daniel", "dd@gmail.com", "12345", "admin"),
    (null, "admin", "admin", "admin@gmail.com", "12345", "admin");