DROP DATABASE IF EXISTS login_simple;
CREATE DATABASE login_simple;
USE login_simple;

CREATE TABLE usuarios (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL
);