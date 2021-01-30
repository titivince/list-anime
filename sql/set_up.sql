/* copy this */

CREATE DATABASE IF NOT EXISTS `anime`;

USE `anime`;

CREATE TABLE IF NOT EXISTS `list` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `plot` TEXT,
  `link` VARCHAR(255),
  `tags` VARCHAR(255),
  `ep` INT,
  `season` INT,
  `time` INT,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `new` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `w` VARCHAR(255),
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `film` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `plot` VARCHAR(255),
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `later` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `link` VARCHAR(255),
  PRIMARY KEY (`id`)
);

/* fill database */

INSERT INTO `list`(`name`, `plot`, `tags`, `ep`, `season`, `time`) 
VALUES 
('name','plot','tags',24,2,8);
/* for more just add
('name','plot','tags',24,2,8),
... 
('name','plot','tags',24,2,8);*/

INSERT INTO `new` ('name', 'link', 'w')
VALUES
('name','link', 'w');
/* for more just add
('name','link', 'w'),
...
('name','link', 'w'); */

INSERT INTO `film` ('name', 'plot')
VALUES
('name','plot');
/* for more just add
('name','plot'),
...
('name','plot'); */