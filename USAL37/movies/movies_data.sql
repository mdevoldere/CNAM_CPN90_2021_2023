/* Sélectionner la base de données db_movies
Toutes les instructions suivantes 
seront exécutées dans cette base de données */
USE db_movies;


DELETE FROM movies_people;
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
(1, 'My movie', 2021, 260, NULL, 99, 3),
(2, 'Scarface', 1983, 170, 'Yes', 100, 2),
(3, 'Les Tuche', 2011, 95, 'No', 75, 1),
(4, 'Les temps modernes', 1936, 170, 'Yes', 50, 1);

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


INSERT INTO movies_people 
(person_id, role_id, movie_id) 
VALUES 
('1', '1', '1'),
('1', '1', '2'),
('1', '2', '1');



/* ACTOR ACTRESS DIRECTOR */
SELECT * FROM subjects;
SELECT * FROM roles;
select * from movies_people;