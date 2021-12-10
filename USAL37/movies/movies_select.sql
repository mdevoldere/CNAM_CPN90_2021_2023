use db_movies;

/* Sélectionner toutes les colonnes de la table people */
SELECT * FROM people;

/* Sélectionner le prénom et le nom uniquement */
SELECT person_firstname, person_lastname FROM people;

/* sélectionner le nom et genre des personnes dont le
   genre est égal à 'F' ou à 'o' */
SELECT person_lastname, person_gender FROM people
 WHERE person_gender='f' OR person_gender='o' ; 

/* sélectionner les personnes dont le genre est égal à 'f' ou 'o' */
SELECT person_lastname, person_gender FROM people
 WHERE person_gender IN ('o', 'f') ; 

/* sélectionner les personnes dont le genre est différent de 'f' et 'o' */
 SELECT person_lastname, person_gender FROM people
 WHERE person_gender NOT IN ('o', 'f') ; 
 
 /* Sélectionner les personnes dont le genre est différent de 'h' */
 SELECT person_lastname, person_gender FROM people
 WHERE person_gender <> 'h' ; 
 
 /* idem que la requête précédente */
 SELECT person_lastname, person_gender FROM people
 WHERE person_gender NOT IN ('h'); 
 
 /* Sélectionner le titre et l'année dans la table movies
  Sélectionner uniquement les fims dont l'année est supérieure à 1980 */
 SELECT movie_title, movie_year FROM movies 
 WHERE movie_year > 1980;
 
 /* Sélectionner le titre et l'année à partir de la talbe movies
	Trier les résultats par titre par ordre croissant */
 SELECT movie_title, movie_year FROM movies ORDER BY movie_title ASC;
 
/* Sélectionner le titre et l'année à partir de la talbe movies
	Trier les résultats par titre par ordre décroissant */
SELECT movie_title, movie_year FROM movies ORDER BY movie_title DESC;

/* Sélectionner le titre et l'année dans la table movies
  Sélectionner uniquement les fims dont l'année est supérieure à 1980
  Trier les résultats par titre par ordre décroissant*/
SELECT movie_title, movie_year FROM movies 
WHERE movie_year > 1950 
ORDER BY movie_title DESC;

/* Sélectionner les films dont l'année est supérieure à 1950 
avec les informations sur la catégorie (JOIN)
Trier les résultats par année et par ordre décroissant */
SELECT movie_title, movie_year, movies.subject_id, subject_name 
FROM movies JOIN subjects 
ON movies.subject_id = subjects.subject_id 
WHERE movie_year > 1950 
ORDER BY movie_year DESC;

/* requete à compléter */
SELECT person_lastname, person_firstname, role_name, movie_title 
FROM people JOIN movies_people ON people.person_id = movies_people.person_id 
JOIN roles ON roles.role_id = movies_people.role_id
; 
