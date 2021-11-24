/* Sélectionner la base de données db_movies
Toutes les instructions suivantes 
seront exécutées dans cette base de données */
USE db_movies;

INSERT INTO subjects 
(subject_id, subject_name) 
VALUES 
(1, 'Comedy'),
(2, 'Action'),
(3, 'Romance');

SELECT * FROM subjects;


