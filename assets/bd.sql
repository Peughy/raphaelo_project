CREATE DATABASE raphaelo;

USE raphaelo;

CREATE TABLE users (
	id_user VARCHAR(50) PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL ,
    pwd TEXT NOT NULL,
    phone VARCHAR(150) NOT NULL,
    type_account VARCHAR(15)  DEFAULT "client"
);

CREATE TABLE produits(
	id_user VARCHAR(50) PRIMARY KEY,
    nom_produit VARCHAR(100) NOT NULL,
    prix INT UNSIGNED NOT NULL,
    ingredient TEXT NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(100) NOT NULL,
    date_ajout DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE representations(
	id_representation VARCHAR(50) PRIMARY KEY,
    lieu VARCHAR(100) NOT NULL,
    image VARCHAR(100) NOT NULL
);

alter table representations modify column id_representation int auto_increment;

INSERT INTO representations(lieu, image) VALUES
	('Raphaelo EKIE', 'raphaelo_ekie.jpg'),
    ('Raphaelo Mimboman', 'raphaelo_mimboman.jpg'),
    ('Raphaelo Ngousso', 'raphaelo_ngousso.png'),
    ('Raphaelo NkolBisson', 'raphaelo_nkolbisson.jpg'),
    ('Raphaelo Odza', 'raphaelo_odza.jpg'),
    ('Raphaelo Simbock', 'raphaelo_simbock.jph'),
    ('Raphaelo Vogt', 'raphaelo_vogt.jpg'),
    ('Raphaelo Awae', 'raphaelo_awae.jpg');

CREATE TABLE livreurs_representations(id_livreur VARCHAR(50) NOT NULL, id_representation INT NOT NULL, FOREIGN KEY (id_livreur) REFERENCES users(id_user), FOREIGN KEY (id_representation) REFERENCES representations(id_representation));