/* Supprimer la base de données db_movies si elle existe */
DROP DATABASE IF EXISTS db_movies;

/* Créer la base de données db_movies si elle n'existe pas */
CREATE DATABASE IF NOT EXISTS db_movies;

USE db_movies;


CREATE TABLE subjects 
(
	subject_id INT PRIMARY KEY,
    subject_name VARCHAR(64) NOT NULL
);




