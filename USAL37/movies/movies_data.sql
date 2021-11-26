/* Sélectionner la base de données db_movies
Toutes les instructions suivantes 
seront exécutées dans cette base de données */
USE db_movies;


DELETE from movies;
DELETE FROM subjects;
DELETE FROM roles;
DELETE FROM people;


INSERT INTO subjects 
(subject_id, subject_name) 
VALUES 
(1, 'Comedy'),
(2, 'Action'),
(3, 'Romance');

INSERT INTO movies 
(movie_id, movie_title, movie_year, movie_length, movie_awards, movie_popularity, subject_id)
VALUES 
(1, 'My movie', 2021, 260, NULL, 99, 3);


SELECT * FROM movies;


INSERT INTO roles
(role_id, role_name) 
VALUES 
(1, 'Director'),
(2, 'Actor'),
(3, 'Actress');


INSERT INTO people 
(person_id, person_lastname, person_firstname, person_gender) 
VALUES 
(1, 'Neymar', 'Jean', 'H'),
(2, 'Kim', 'Léa', 'F'),
(3, 'Golay', 'Jerry', 'O');




/* ACTOR ACTRESS DIRECTOR */
SELECT * FROM subjects;
SELECT * FROM roles;