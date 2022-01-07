INSERT INTO movies.subjects 
(subject_id, subject_name) 
VALUES 
(1, "Comedy"),
(2, "Drama"),
(3, "Fantasy");

SELECT * FROM movies.subjects;


INSERT INTO movies.movies 
(movie_id, movie_title, movie_length, movie_year, movie_awards, movie_popularity, subject_id)  
VALUES 
(1, 'Lord of the ring', 178, 2001, 'yes', 90, 3);


INSERT INTO movies.movies 
(movie_id, movie_title, movie_length, movie_year, movie_awards, movie_popularity, subject_id)  
VALUES 
(2, 'The Hobbit', 169, 2012, 'yes', 70, 7);


SELECT * FROM movies.movies;

SELECT movie_title, movie_year, subject_name
FROM movies.movies 
JOIN movies.subjects ON movies.subject_id = subjects.subject_id;
