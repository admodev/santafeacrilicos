CREATE DATABASE IF NOT EXISTS `santafeacrilicos`;
USE `santafeacrilicos`;

CREATE TABLE IF NOT EXISTS admins (
     id INT AUTO_INCREMENT PRIMARY KEY,
     username VARCHAR(255) NOT NULL,
     password VARCHAR (255) NOT NULL
    );
INSERT INTO `admins` (id, username, password) VALUES (1, "test", "test123");