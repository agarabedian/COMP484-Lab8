CREATE DATABASE finaldb;
SHOW DATABASE;
USE finaldb;

CREATE TABLE auth(
	userid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username varchar(60),
	password varchar(60),
	firstName varchar(60),
	lastName varchar(60),
	email varchar(60),
	phone varchar(60)
);

INSERT INTO auth(username, password, firstName, lastName, email, phone) VALUES ("ocasarez", "123456", "Oscar", "Casarez", "email@me.com", "818-123-4567");
INSERT INTO auth(username, password, firstName, lastName, email, phone) VALUES ("aram0000", "123456", "Aram", "Garabedian", "email@me.com", "818-876-4567");
INSERT INTO auth(username, password, firstName, lastName, email, phone) VALUES ("johnsmith", "123456", "John", "Smith", "email@me.com", "818-472-4567");