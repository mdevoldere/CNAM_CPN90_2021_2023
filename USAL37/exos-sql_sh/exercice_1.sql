use exercices;

/* Obtenir la liste des 10 villes les plus peuplées en 2012 */

SELECT * FROM villes_france_free ORDER BY ville_population_2012 DESC LIMIT 0,10;


/* Obtenir la liste des 50 villes ayant la plus faible superficie */

SELECT * FROM villes_france_free ORDER BY ville_surface ASC LIMIT 50;


/* Obtenir la liste des départements d’outres-mer, c’est-à-dire ceux dont le numéro de département commencent par “97” */

SELECT * FROM departement WHERE departement_code LIKE '97%';



/* Obtenir le nom des 10 villes les plus peuplées en 2012, ainsi que le nom du département associé */

 SELECT ville_nom, departement_nom, ville_population_2012 FROM villes_france_free as V
 JOIN departement as D ON V.ville_departement = D.departement_code 
 ORDER BY ville_population_2012 DESC LIMIT 0,10;