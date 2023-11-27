CREATE DATABASE sanaat_bladi;

CREATE TABLE permission(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50)
);

CREATE TABLE role(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50)
);

CREATE TABLE permission_role(
    permission_id INT,
    role_id INT,
    FOREIGN KEY (permission_id) REFERENCES permission(id),
    FOREIGN KEY (role_id) REFERENCES role(id)
);

CREATE TABLE utilisateur(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    prenom VARCHAR(50),
    nom VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(50),
    photo VARCHAR(50)
);

CREATE TABLE role_utilisateur(
    role_id INT,
    utilisateur_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id),
    FOREIGN KEY (role_id) REFERENCES role(id)
);

CREATE TABLE artisant(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    prenom VARCHAR(50),
    nom VARCHAR(50),
    age VARCHAR(50)
);

CREATE TABLE materiel(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50)
);

CREATE TABLE produit(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    descreption VARCHAR(50),
    artisant_id INT,
    materiel_id INT,
    utilisateur_id INT,
    FOREIGN KEY (artisant_id) REFERENCES artisant(id),
    FOREIGN KEY (materiel_id) REFERENCES materiel(id),
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id)
);
CREATE TABLE categorie(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50)
);
CREATE TABLE categorie_produit(
    categorie_id INT,
    produit_id INT,
    FOREIGN KEY (categorie_id) REFERENCES categorie(id),
    FOREIGN KEY (produit_id) REFERENCES produit(id)
);
