
DROP DATABASE IF EXISTS aplication;

CREATE DATABASE aplication CHARACTER SET utf8 COLLATE utf8_general_ci;

USE aplication;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE users (
    id int(11) NOT NULL,
    user_name VARCHAR(255) NOT NULL,
    user_email VARCHAR(255) NOT NULL,
    user_password VARCHAR(255) NOT NULL,  
    user_birth DATE NOT NULL,
    user_avatar VARCHAR(255) NOT NULL,
    user_bio TEXT,
    user_type text,
    user_status text
);
ALTER TABLE `users` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);