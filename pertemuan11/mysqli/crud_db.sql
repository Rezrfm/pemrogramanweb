create database crud_db;

use crud_db;

CREATE TABLE `users` (
    `id` int(11) NOT NULL auto_increment,
    `name` varchar(50),
    `email` varchar(50),
    `mobile` varchar(15),
    PRIMARY KEY (`id`)
);