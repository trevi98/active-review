CREATE DATABASE IF NOT EXISTS active_reviews
    COLLATE=utf8_general_ci;

USE active_reviews;

CREATE TABLE reviews(
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    education VARCHAR(30) NOT NULL,
    job_title VARCHAR(30) NOT NULL,
    contry VARCHAR(30) NOT NULL,
    star INT(1) NOT NULL,
    react INT(1) NULL,
    status INT(1) NOT NULL DEFAULT 0,
    comment TEXT(500) NOT NULL,
    avatar TEXT(500) NULL,
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE admin(
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT
);

INSERT INTO admin (username,password,id) VALUES ("admin","admin",1);