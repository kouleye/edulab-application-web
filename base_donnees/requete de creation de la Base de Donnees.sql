
CREATE DATABASE IF NOT EXISTS Commerce_ligne ;

USE Commerce_ligne ; 

CREATE TABLE IF  NOT  EXISTS profil(
	idprofil INTEGER PRIMARY KEY,
	nomprofil VARCHAR(20) NULL
)
;

CREATE TABLE IF  NOT  EXISTS utilisateur(
    idutilisateur INTEGER primary key, 
    login VARCHAR(20) NULL,
	motdepass text ,
	etat INTEGER NULL,
	idprofil INTEGER REFERENCES profil (idprofil) ON DELETE CASCADE
)
;

CREATE TABLE IF  NOT  EXISTS personne(
	idPers INTEGER primary key AUTO_INCREMENT,
	nom VARCHAR(20) NULL,
	prenom VARCHAR(20) NULL,
	tel VARCHAR(20) NULL,
	sexe VARCHAR(1) NULL,
    adresse VARCHAR(25) NULL,
    email VARCHAR(25) NULL,
	ville VARCHAR(25) NULL,
	region VARCHAR(25) NULL,
	pays VARCHAR(20) NULL,
    idutilisateur INTEGER REFERENCES utilisateur (idutilisateur) ON DELETE CASCADE
);

CREATE TABLE IF  NOT  EXISTS payement(
	idPers INTEGER,
	idnumeropay INTEGER,
	datepayement date NULL,
	montant REAL  NULL,
	PRIMARY key(idPers,idnumeropay)
);

CREATE TABLE IF  NOT  EXISTS commande(
	idcommande INTEGER primary key AUTO_INCREMENT,
	datecommande date NULL,
	datelivraison date NULL,
	status VARCHAR(20) NULL,
	commentaire VARCHAR(45) NULL,
	idPers INTEGER REFERENCES personne (idPers) ON DELETE CASCADE
) ;

CREATE TABLE IF  NOT  EXISTS categorieproduit(
	idcatproduit VARCHAR(20) PRIMARY KEY,
    descriptioncatprod VARCHAR(45) NULL
);

CREATE TABLE IF  NOT  EXISTS produit(
	idproduit VARCHAR(20) PRIMARY KEY,
	nomproduit VARCHAR(35) NULL,
	descriptionproduit VARCHAR(45) NULL,
	quantiteenstock INTEGER NULL,
	prixAchat REAL  NULL,
	prixunit REAL  NULL,
	idcatproduit VARCHAR(20) REFERENCES categorieproduit (idcatproduit) ON UPDATE CASCADE,
    imageproduit VARCHAR(45)
)  
;
CREATE TABLE IF  NOT  EXISTS detailscommande(
	idcommande INTEGER,
	idproduit VARCHAR(20),
	quantitecmd INTEGER NULL,
	prixunitaire REAL  NULL,
	numerolignecmd INTEGER NULL,
	PRIMARY KEY(idcommande,idproduit)
) ;