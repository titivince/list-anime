/* copy this */

CREATE DATABASE IF NOT EXISTS `anime`;

USE `anime`;

CREATE TABLE IF NOT EXISTS `list` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `desc` TEXT,
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
/* fill database */

INSERT INTO `list`(`name`, `desc`, `tags`, `ep`, `season`, `time`) 
VALUES 
('name','desc','tags',24,2,8);
/* for more just add
('name','desc','tags',24,2,8),
... 
('name','desc','tags',24,2,8);*/

INSERT INTO `new` ('name', 'w')
VALUES
('name', 'w');
/* for more just add
('name', 'w'),
...
('name', 'w'); */