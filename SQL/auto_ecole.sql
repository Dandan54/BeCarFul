DROP DATABASE IF EXISTS auto_ecole;
CREATE DATABASE auto_ecole;
USE auto_ecole;

CREATE TABLE formule (
    idformule INT(3) auto_increment,
    libelle VARCHAR(30),
    prix VARCHAR(30),
    PRIMARY KEY (idformule)
);

CREATE TABLE eleve (
    ideleve INT(3) NOT NULL auto_increment,
    prenom VARCHAR(30),
    nom VARCHAR(30),
    adresse VARCHAR(60),
    cp INT(5),
    ville VARCHAR(30),
    tel VARCHAR(20),
    email VARCHAR(40),
    d_naissance DATE,
    mdp varchar(100),
    idformule INT(3),
    PRIMARY KEY (ideleve),
<<<<<<< HEAD
    FOREIGN KEY (idformule) references formule(idformule)
=======
    FOREIGN KEY (idformule) REFERENCES formule(idformule)
>>>>>>> b4214e8bfd9ac8bb7eb3537efe417a652d1bc801
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

CREATE TABLE coursConduite (
    idconduite INT(3) auto_increment,
    dateCoursConduite DATE,
    heureDebConduite TIME,
    heureFinConduite TIME,
    ideleve INT(3),
    PRIMARY KEY (idconduite),
    FOREIGN KEY (ideleve) REFERENCES eleve(ideleve)
);

CREATE TABLE salle (
    idsalle INT(3) auto_increment,
    nomSalle VARCHAR(30),
    nbPlace INT(2),
    PRIMARY KEY (idsalle)
);

CREATE TABLE coursCode (
    idcode INT(3) auto_increment,
    dateCoursCode DATE,
    heureDebCode TIME,
    heureFinCode TIME,
    idsalle INT(3),
    ideleve INT(3),
    PRIMARY KEY (idcode),
    FOREIGN KEY (idsalle) REFERENCES salle(idsalle),
    FOREIGN KEY (ideleve) REFERENCES eleve(ideleve)
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
CREATE TABLE choix (
    idchoix int(3) AUTO_INCREMENT,
    numeroQuestion int(11) NOT NULL,
    correct tinyint(4) NOT NULL DEFAULT '0',
    reponse varchar(150),
    PRIMARY KEY (idchoix)
);
CREATE TABLE question (
    idquestion int(3) AUTO_INCREMENT,
    question varchar(150) NOT NULL,
    PRIMARY KEY (idquestion)
);

INSERT INTO formule VALUES
    (null, "Formule 20h", "999 euros"),
    (null, "Formule 25h", "1200 euros"),
    (null, "Formule 30h", "1399 euros"),
    (null, "Conduite accompagnee", "799 euros"),
    (null, "Conduite supervisee", "799 euros");

INSERT INTO eleve VALUES 
    (null, "John", "Jo", "5 rue Jean", 75018, "Paris", "0147671640", "johnj@gmail.com", "1990-01-15", "12345", 3),
    (null, "Clara", "Cla", "2 place Carnot", 75015, "Paris", "0147586941", "clarac@gmail.com", "2000-09-12", "12345", 3),
    (null, "Benoit", "Ben", "11 impasse Michel", 75012, "Paris", "0147563242", "benoitb@gmail.com", "1996-05-30", "12345", 2);

INSERT INTO moniteur VALUES
    (null, "Bob", "Lati", "5 rue Pierre", 95100, "Argenteuil", "0147671649", "bl@gmail.com", '1966-01-23', '1996-01-29', 1300.00),
    (null, "Yves", "Plout", "2 place Paul", 75015, "Paris", "0147586974", "yp@gmail.com", '1971-09-05', '1999-06-04', 1250.30),
    (null, "Marie", "Sublard", "11 impasse Jacques", 92000, "Nanterre", "0147563249", "ms@gmail.com", '1969-05-01', '2001-08-13', 1200.86);

INSERT INTO choix (idchoix, numeroQuestion, correct, reponse) VALUES
    (null, 1, 1, "Oui"),
    (null, 1, 0, "Non"),
    (null, 2, 0, "Avertir les secours"),
    (null, 2, 0, "Secourir les victimes"),
    (null, 2, 1, "Securiser et proteger les lieux"),
    (null, 3, 0, "100 km / heure"),
    (null, 3, 1, "110 km / heure"),
    (null, 3, 0, "130 km / heure"),
    (null, 4, 0, "Ma main gauche"),
    (null, 4, 1, "Ma main droite"),
    (null, 5, 1, "Oui"),
    (null, 5, 0, "Non");

INSERT INTO question (idquestion, question) VALUES
    (null, "Le marquage au sol m'aide a evaluer l'espace de securite :"),
    (null, "En arrivant sur les lieux d'un accident, je dois en premier lieu :"),
    (null, "Etant conducteur novice, ma vitesse sur autoroute est limitee a :"),
    (null, "Lorsque j'ouvre la portiere de ma voiture, j'utilise :"),
    (null, "Le regulateur de vitesse permet dans certaines situations de faire des economies de carburant :");

INSERT INTO coursConduite VALUES
    (null, "12/01/2020", "12:00", "13:00", 1);

/* Triggers 

Drop trigger if exists calculhconduite;
delimiter //
create trigger calculhconduite
    before insert on coursConduite 
    for each row
begin 
    set new.hconduite=new.heureFinConduite - new.heureDebConduite
    where coursConduite.ideleve = eleve.ideleve;
end //
delimiter ;

Drop trigger if exists calculhcode;
delimiter //
create trigger calculhcode
    before insert on coursCode
    for each row
begin 
    set new.hcode=new.heureFinCode - new.heureDebCode
    where coursCode.ideleve = eleve.ideleve;
end //
delimiter ;

Drop trigger if exists ajoutEleve;
delimiter //
create trigger ajoutEleve
 after insert on eleve
 begin
    set message_text='Ajout effectué !';
 end //
 delimiter ; */