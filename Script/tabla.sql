CREATE TABLE `shopcomics`.`users` (
`Username` VARCHAR(16) NOT NULL ,
`name` VARCHAR(32) NULL ,
`surname` VARCHAR(64) NULL ,
`phone` VARCHAR(9) NULL ,
`email` INT NULL ,
`address` INT NULL ,
`id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `users` ADD `rol` VARCHAR(5) NOT NULL DEFAULT 'users' AFTER `surname`;

CREATE TABLE `shopcomics`. (
`category` VARCHAR(16) NULL , 
`id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `shopcomics`.`products` (
`title` VARCHAR(64) NOT NULL , 
`reference` VARCHAR(16) NOT NULL , 
`author` VARCHAR(32) NULL , 
`publisher` VARCHAR(32) NULL , 
`description` VARCHAR(128) NULL , 
`formate` VARCHAR(16) NULL , 
`page` INT NULL , 
`price` DOUBLE NULL , 
`idCategory` INT NOT NULL , 
`id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE products ADD FOREIGN KEY (idCategory) REFERENCES category (id);

