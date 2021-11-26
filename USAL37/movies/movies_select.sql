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
 
 /* sélectionner les personnes dont le genre est différent de 'h' */
 SELECT person_lastname, person_gender FROM people
 WHERE person_gender <> 'h' ; 
