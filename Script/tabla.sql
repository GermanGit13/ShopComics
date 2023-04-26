-- Crear tabla Users --
CREATE TABLE `shopcomics`.`users` (
`id` INT(9) NOT NULL auto_increment,
`username` VARCHAR(16) NOT NULL unique,
`rol` VARCHAR(5) NOT NULL DEFAULT 'users',
`pass` VARCHAR(256) NOT NULL,
`email` VARCHAR(64) NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `users` ADD PRIMARY KEY(`id`);

-- Crear tabla Category --
CREATE TABLE `shopcomics`.`category` (
`id` INT NOT NULL auto_increment,
`category` VARCHAR(32) NULL ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- Crear tabla Comics --
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

ALTER TABLE comics ADD FOREIGN KEY (idCategory) REFERENCES category (id) ON DELETE SET NULL;

-- Crear tabla Facturas --
CREATE TABLE `shopcomics`.`facturas` (
`id` INT NOT NULL auto_increment,
`fecha` DATE NOT NULL ,
`numero` VARCHAR(16) NOT NULL ,
`cantidad` INT NOT NULL ,
`importe` DOUBLE NOT NULL ,
`total` DOUBLE NOT NULL ,
`idComics` INT NOT NULL ,
`idUsers` INT NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

ALTER TABLE facturas ADD FOREIGN KEY (idUsers) REFERENCES users (id) ON DELETE SET NULL;
ALTER TABLE facturas ADD FOREIGN KEY (idComics) REFERENCES comics (id) ON DELETE SET NULL;

-- Carga de Categorias --
INSERT INTO category (category,img) VALUES('Marvel', 'https://fr.web.img2.acsta.net/r_654_368/newsv7/20/12/17/11/03/2948069.jpg');
INSERT INTO category (category, img) VALUES('DC', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/DC_Comics_logo.svg/180px-DC_Comics_logo.svg.png');
INSERT INTO category (category, img) VALUES('Europeo', 'https://www.kamekame.es/c/16-category_default/europeo.jpg');
INSERT INTO category (category, img) VALUES('Manga', 'http://mangamax.tinymanga.com/landing/logo.png');

--Carga de Comics --
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Lobezno 1: Honor', 'MARVEL-7899', 'Frank Miller, Chris Claremont', 'Panini Comics', 'Lobezno viaja a Japón para encontrarse con el amor de su vida. ¡Y con los asesinos de La Mano!', 'Tapa dura', '112', '14.25', 'https://tienda.tomosygrapas.com/48114-large_default/marvel-must-have-lobezno-honor.jpg', '1');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Marvel Omnibus 1. Magneto de Cullen Bunn y G. Hernández Walta', 'MARVEL-7999', 'Gabriel Hernández', 'Panini Comics', 'El que fuera considerado el mutante más peligroso del planeta ya no es el hombre que todos conocimos', 'Tapa dura', '468', '47.50', 'https://tienda.tomosygrapas.com/53286-large_default/magneto-de-cullen-bunn-y-g-hernandez-walta-marvel-omnibus.jpg', '1');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Lobezno 1: Honor', 'MARVEL-7899', 'Frank Miller, Chris Claremont', 'Panini Comics', 'Lobezno viaja a Japón para encontrarse con el amor de su vida. ¡Y con los asesinos de La Mano!', 'Tapa dura', '112', '14.25', 'https://tienda.tomosygrapas.com/48114-large_default/marvel-must-have-lobezno-honor.jpg', '1');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Marvel Omnibus 1. Magneto de Cullen Bunn y G. Hernández Walta', 'MARVEL-7999', 'Gabriel Hernández', 'Panini Comics', 'El que fuera considerado el mutante más peligroso del planeta ya no es el hombre que todos conocimos', 'Tapa dura', '468', '47.50', 'https://tienda.tomosygrapas.com/53286-large_default/magneto-de-cullen-bunn-y-g-hernandez-walta-marvel-omnibus.jpg', '1');

INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Lobezno 1: Honor', 'MARVEL-7899', 'Frank Miller, Chris Claremont', 'Panini Comics', 'Lobezno viaja a Japón para encontrarse con el amor de su vida. ¡Y con los asesinos de La Mano!', 'Tapa dura', '112', '14.25', 'https://tienda.tomosygrapas.com/48114-large_default/marvel-must-have-lobezno-honor.jpg', '1');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Marvel Omnibus 1. Magneto de Cullen Bunn y G. Hernández Walta', 'MARVEL-7999', 'Gabriel Hernández', 'Panini Comics', 'El que fuera considerado el mutante más peligroso del planeta ya no es el hombre que todos conocimos', 'Tapa dura', '468', '47.50', 'https://tienda.tomosygrapas.com/53286-large_default/magneto-de-cullen-bunn-y-g-hernandez-walta-marvel-omnibus.jpg', '1');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Lobezno 1: Honor', 'MARVEL-7899', 'Frank Miller, Chris Claremont', 'Panini Comics', 'Lobezno viaja a Japón para encontrarse con el amor de su vida. ¡Y con los asesinos de La Mano!', 'Tapa dura', '112', '14.25', 'https://tienda.tomosygrapas.com/48114-large_default/marvel-must-have-lobezno-honor.jpg', '1');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Marvel Omnibus 1. Magneto de Cullen Bunn y G. Hernández Walta', 'MARVEL-7999', 'Gabriel Hernández', 'Panini Comics', 'El que fuera considerado el mutante más peligroso del planeta ya no es el hombre que todos conocimos', 'Tapa dura', '468', '47.50', 'https://tienda.tomosygrapas.com/53286-large_default/magneto-de-cullen-bunn-y-g-hernandez-walta-marvel-omnibus.jpg', '1');

INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Lobezno 2: Honor', 'MARVEL-7899', 'Frank Miller, Chris Claremont', 'Panini Comics', 'Lobezno viaja a Japón para encontrarse con el amor de su vida. ¡Y con los asesinos de La Mano!', 'Tapa dura', '112', '14.25', 'https://tienda.tomosygrapas.com/48114-large_default/marvel-must-have-lobezno-honor.jpg', '2');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Marvel Omnibus 2. Magneto de Cullen Bunn y G. Hernández Walta', 'MARVEL-7999', 'Gabriel Hernández', 'Panini Comics', 'El que fuera considerado el mutante más peligroso del planeta ya no es el hombre que todos conocimos', 'Tapa dura', '468', '47.50', 'https://tienda.tomosygrapas.com/53286-large_default/magneto-de-cullen-bunn-y-g-hernandez-walta-marvel-omnibus.jpg', '2');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Lobezno 2: Honor', 'MARVEL-7899', 'Frank Miller, Chris Claremont', 'Panini Comics', 'Lobezno viaja a Japón para encontrarse con el amor de su vida. ¡Y con los asesinos de La Mano!', 'Tapa dura', '112', '14.25', 'https://tienda.tomosygrapas.com/48114-large_default/marvel-must-have-lobezno-honor.jpg', '2');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Marvel Omnibus 2. Magneto de Cullen Bunn y G. Hernández Walta', 'MARVEL-7999', 'Gabriel Hernández', 'Panini Comics', 'El que fuera considerado el mutante más peligroso del planeta ya no es el hombre que todos conocimos', 'Tapa dura', '468', '47.50', 'https://tienda.tomosygrapas.com/53286-large_default/magneto-de-cullen-bunn-y-g-hernandez-walta-marvel-omnibus.jpg', '2');

INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Lobezno 3: Honor', 'MARVEL-7899', 'Frank Miller, Chris Claremont', 'Panini Comics', 'Lobezno viaja a Japón para encontrarse con el amor de su vida. ¡Y con los asesinos de La Mano!', 'Tapa dura', '112', '14.25', 'https://tienda.tomosygrapas.com/48114-large_default/marvel-must-have-lobezno-honor.jpg', '3');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Marvel Omnibus 3. Magneto de Cullen Bunn y G. Hernández Walta', 'MARVEL-7999', 'Gabriel Hernández', 'Panini Comics', 'El que fuera considerado el mutante más peligroso del planeta ya no es el hombre que todos conocimos', 'Tapa dura', '468', '47.50', 'https://tienda.tomosygrapas.com/53286-large_default/magneto-de-cullen-bunn-y-g-hernandez-walta-marvel-omnibus.jpg', '2');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Lobezno 3: Honor', 'MARVEL-7899', 'Frank Miller, Chris Claremont', 'Panini Comics', 'Lobezno viaja a Japón para encontrarse con el amor de su vida. ¡Y con los asesinos de La Mano!', 'Tapa dura', '112', '14.25', 'https://tienda.tomosygrapas.com/48114-large_default/marvel-must-have-lobezno-honor.jpg', '3');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Marvel Omnibus 3. Magneto de Cullen Bunn y G. Hernández Walta', 'MARVEL-7999', 'Gabriel Hernández', 'Panini Comics', 'El que fuera considerado el mutante más peligroso del planeta ya no es el hombre que todos conocimos', 'Tapa dura', '468', '47.50', 'https://tienda.tomosygrapas.com/53286-large_default/magneto-de-cullen-bunn-y-g-hernandez-walta-marvel-omnibus.jpg', '2');

INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Lobezno 4: Honor', 'MARVEL-7899', 'Frank Miller, Chris Claremont', 'Panini Comics', 'Lobezno viaja a Japón para encontrarse con el amor de su vida. ¡Y con los asesinos de La Mano!', 'Tapa dura', '112', '14.25', 'https://tienda.tomosygrapas.com/48114-large_default/marvel-must-have-lobezno-honor.jpg', '3');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Marvel Omnibus 4. Magneto de Cullen Bunn y G. Hernández Walta', 'MARVEL-7999', 'Gabriel Hernández', 'Panini Comics', 'El que fuera considerado el mutante más peligroso del planeta ya no es el hombre que todos conocimos', 'Tapa dura', '468', '47.50', 'https://tienda.tomosygrapas.com/53286-large_default/magneto-de-cullen-bunn-y-g-hernandez-walta-marvel-omnibus.jpg', '2');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Lobezno 4: Honor', 'MARVEL-7899', 'Frank Miller, Chris Claremont', 'Panini Comics', 'Lobezno viaja a Japón para encontrarse con el amor de su vida. ¡Y con los asesinos de La Mano!', 'Tapa dura', '112', '14.25', 'https://tienda.tomosygrapas.com/48114-large_default/marvel-must-have-lobezno-honor.jpg', '3');
INSERT INTO comics (title, reference, author, publisher, description, formate, page, price, img, idCategory) VALUES('Marvel Omnibus 4. Magneto de Cullen Bunn y G. Hernández Walta', 'MARVEL-7999', 'Gabriel Hernández', 'Panini Comics', 'El que fuera considerado el mutante más peligroso del planeta ya no es el hombre que todos conocimos', 'Tapa dura', '468', '47.50', 'https://tienda.tomosygrapas.com/53286-large_default/magneto-de-cullen-bunn-y-g-hernandez-walta-marvel-omnibus.jpg', '2');

-- Carga de facturas --
INSERT INTO facturas (fecha, numero, cantidad, importe, total, idComics, idUsers) VALUES ('20230119', 'FAC-0001-2023', '2', '14.25', '28.50', '1', '16');
INSERT INTO facturas (fecha, numero, cantidad, importe, total, idComics, idUsers) VALUES ('20230408', 'FAC-0002-2023', '1', '47.5', '47.50', '2', '14');
INSERT INTO facturas (fecha, numero, cantidad, importe, total, idComics, idUsers) VALUES ('20231122', 'FAC-0004-2023', '4', '14.25', '57', '1', '16');
INSERT INTO facturas (fecha, numero, cantidad, importe, total, idComics, idUsers) VALUES ('20230428', 'FAC-0005-2023', '2', '47.5', '90', '2', '14');

-- Pruebas -
-- CREATE TABLE `shopcomics`.`facturas` (
--                                        `id` INT NOT NULL auto_increment,
--                                        `fecha` DATE NOT NULL ,
--                                        `numero` VARCHAR(16) NOT NULL ,
--                                        `importe` DOUBLE NOT NULL ,
--                                        `idUsers` INT NOT NULL ,
--                                        PRIMARY KEY (`id`)
-- ) ENGINE = InnoDB;
--
-- ALTER TABLE facturas ADD FOREIGN KEY (idUsers) REFERENCES users (id);
--
-- CREATE TABLE `shopcomics`.`detalleFac` (
--                                          `id` INT NOT NULL auto_increment,
--                                          `cantidad` DOUBLE NULL ,
--                                          `idComics` INT NOT NULL ,
--                                          `idFacturas` INT NOT NULL ,
--                                          PRIMARY KEY (`id`)
-- ) ENGINE = InnoDB;
--
-- ALTER TABLE detalleFac ADD FOREIGN KEY (id) REFERENCES facturas (id);
-- ALTER TABLE detalleFac ADD FOREIGN KEY (idFacturas) REFERENCES facturas (id);