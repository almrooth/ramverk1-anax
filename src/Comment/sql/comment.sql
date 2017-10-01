--
-- Creating a small table.
-- Create a database and a user having access to this database,
-- this must be done by hand, se commented rows on how to do it.
--



--
-- Create a database for test
--
-- DROP DATABASE anaxdb;
-- CREATE DATABASE IF NOT EXISTS anaxdb;
USE anaxdb;



--
-- Create a database user for the test database
--
-- GRANT ALL ON anaxdb.* TO anax@localhost IDENTIFIED BY 'anax';



-- Ensure UTF8 on the database connection
SET NAMES utf8;



--
-- Table Book
--
DROP TABLE IF EXISTS Book;
CREATE TABLE Book (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `title` VARCHAR(256) NOT NULL,
    `author` VARCHAR(256) NOT NULL,
    `isbn` VARCHAR(256) NOT NULL,
    `image` VARCHAR(256) NOT NULL
) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;

SELECT * FROM Book;


--
-- Table rv1_users
--
DROP TABLE IF EXISTS rv1_users;
CREATE TABLE rv1_users (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `role` VARCHAR(20) NOT NULL,
    `username` VARCHAR(100) UNIQUE NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `created` DATETIME,
    `updated` DATETIME,
    `deleted` DATETIME
) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;

SELECT * FROM rv1_users;

UPDATE rv1_users SET role='admin' WHERE id=2;

--
-- Table rv1_comments
--
DROP TABLE IF EXISTS rv1_comments;
CREATE TABLE rv1_comments (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `user_id` INTEGER NOT NULL,
    `content` TEXT NOT NULL,
    `created` DATETIME,
    `updated` DATETIME,
    `deleted` DATETIME
) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;

SELECT * FROM rv1_comments;