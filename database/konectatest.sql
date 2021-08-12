-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema konectatest
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `konectatest` ;

-- -----------------------------------------------------
-- Schema konectatest
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `konectatest` ;
SHOW WARNINGS;
USE `konectatest` ;

-- -----------------------------------------------------
-- Table `konectatest`.`employees`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `konectatest`.`employees` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `konectatest`.`employees` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `date_entry` DATE NOT NULL,
  `name` VARCHAR(50) NOT NULL,
  `salary` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `name_UNIQUE` ON `konectatest`.`employees` (`name` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `konectatest`.`requests`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `konectatest`.`requests` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `konectatest`.`requests` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` VARCHAR(50) NOT NULL,
  `description` VARCHAR(50) NOT NULL,
  `summary` VARCHAR(50) NOT NULL,
  `employees_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `employees_id`),
  CONSTRAINT `fk_requests_employees`
    FOREIGN KEY (`employees_id`)
    REFERENCES `konectatest`.`employees` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `code_UNIQUE` ON `konectatest`.`requests` (`code` ASC) VISIBLE;

SHOW WARNINGS;
CREATE INDEX `fk_requests_employees_idx` ON `konectatest`.`requests` (`employees_id` ASC) VISIBLE;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
