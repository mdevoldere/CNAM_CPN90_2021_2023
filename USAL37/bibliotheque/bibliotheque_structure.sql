
SHOW DATABASES;

/* Supprimer la base de données bibliotheque si elle existe */
DROP DATABASE IF EXISTS bibliotheque;

/* Créer la base de données */
CREATE DATABASE IF NOT EXISTS bibliotheque;

/* Sélectionner la base de données */
USE bibliotheque;

DROP TABLE IF EXISTS bibliotheque.customers;

CREATE TABLE IF NOT EXISTS bibliotheque.customers 
(
    customer_id CHAR(8) PRIMARY KEY,
    customer_firstname VARCHAR(60) NOT NULL,
    customer_lastname VARCHAR(255) NOT NULL,
    customer_address TEXT NOT NULL,
    customer_deposit DECIMAL(5,2) NOT NULL
);

SHOW TABLES;


INSERT INTO bibliotheque.customers 
(customer_id, customer_firstname, customer_lastname, customer_address, customer_deposit) 
VALUES 
('000000A1', 'Mike', 'DEV', '1 rue de mulhouse 75000 Paris', 15.54);



SELECT * FROM bibliotheque.customers;
