CREATE TABLE `shopcomics`.`users` (
`id` INT(9) NOT NULL auto_increment,
`username` VARCHAR(16) NOT NULL unique,
`rol` VARCHAR(5) NOT NULL DEFAULT 'users',
`pass` VARCHAR(32) NOT NULL,
`email` VARCHAR(64) NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `users` ADD PRIMARY KEY(`id`);

CREATE TABLE `shopcomics`.`category` (
`id` INT NOT NULL auto_increment,
`category` VARCHAR(16) NULL ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;


CREATE TABLE `shopcomics`.`comics` (
`id` INT NOT NULL auto_increment,
`title` VARCHAR(64) NOT NULL , 
`reference` VARCHAR(16) NOT NULL , 
`author` VARCHAR(32) NULL , 
`publisher` VARCHAR(32) NULL , 
`description` VARCHAR(128) NULL , 
`formate` VARCHAR(16) NULL , 
`page` INT NULL , 
`price` DOUBLE NULL , 
`idCategory` INT NOT NULL , 
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

ALTER TABLE comics ADD FOREIGN KEY (idCategory) REFERENCES category (id);

INSERT INTO category VALUES(1, 'Marvel');
INSERT INTO comics VALUES(1, 'Lobezno: Honor', 'MARVEL-7899', 'Frank Miller, Chris Claremont', 'Panini Comics', 'Lobezno viaja a Japón para encontrarse con el amor de su vida. ¡Y con los asesinos de La Mano!', 'Tapa dura', '112', '14.25', '1');
INSERT INTO comics VALUES(2, 'Marvel Omnibus. Magneto de Cullen Bunn y G. Hernández Walta', 'MARVEL-7999', 'Gabriel Hernández', 'Panini Comics', 'El que fuera considerado el mutante más peligroso del planeta ya no es el hombre que todos conocimos', 'Tapa dura', '468', '47.50', '1');

INSERT INTO comics VALUES('', 'MARVEL-7899', 'Frank Miller, Chris Claremont', 'Panini Comics', 'Lobezno viaja a Japón para encontrarse con el amor de su vida. ¡Y con los asesinos de La Mano!', 'Tapa dura', '112', '14.25', '1');
insert into users (username, email, password) values('Ger','grs@grs', '123456');