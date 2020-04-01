-- MySQL Script generated by MySQL Workbench
-- Tue Mar 31 21:37:55 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema todo_list_app
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema todo_list_app
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `todo_list_app` DEFAULT CHARACTER SET utf8 ;
USE `todo_list_app` ;

-- -----------------------------------------------------
-- Table `todo_list_app`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `todo_list_app`.`rol` (
  `id_rol` INT NOT NULL AUTO_INCREMENT,
  `nam_rol` VARCHAR(45) NULL,
  `sta_rol` CHAR(1) NULL,
  PRIMARY KEY (`id_rol`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `todo_list_app`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `todo_list_app`.`user` (
  `id_use` INT NOT NULL AUTO_INCREMENT,
  `nam_use` VARCHAR(45) NULL,
  `las_use` VARCHAR(45) NULL COMMENT 'User last name',
  `mai_use` VARCHAR(50) NULL,
  `pas_use` VARCHAR(45) NULL,
  `fky_rol` INT NULL,
  `sta_use` CHAR(1) NULL,
  PRIMARY KEY (`id_use`),
  UNIQUE INDEX `mai_use_UNIQUE` (`mai_use` ASC),
  INDEX `fky_rol_use_idx` (`fky_rol` ASC),
  CONSTRAINT `fky_rol_use`
    FOREIGN KEY (`fky_rol`)
    REFERENCES `todo_list_app`.`rol` (`id_rol`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `todo_list_app`.`color`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `todo_list_app`.`color` (
  `id_col` INT NOT NULL AUTO_INCREMENT,
  `nam_col` VARCHAR(45) NULL,
  `cod_col` VARCHAR(16) NULL COMMENT 'Code of the color, HEX',
  `fky_user` INT NULL,
  `sta_col` CHAR(1) NULL,
  PRIMARY KEY (`id_col`),
  INDEX `fky_user_color_idx` (`fky_user` ASC),
  CONSTRAINT `fky_user_color`
    FOREIGN KEY (`fky_user`)
    REFERENCES `todo_list_app`.`user` (`id_use`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `todo_list_app`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `todo_list_app`.`category` (
  `id_cat` INT NOT NULL AUTO_INCREMENT,
  `nam_cat` VARCHAR(45) NULL COMMENT 'Name of Category',
  `fky_color` INT NULL,
  `fky_user` INT NULL,
  `stat_cat` CHAR(1) NULL COMMENT 'Status of the Category',
  PRIMARY KEY (`id_cat`),
  INDEX `fky_user_cat_idx` (`fky_user` ASC),
  INDEX `fky_color_cat_idx` (`fky_color` ASC),
  CONSTRAINT `fky_color_cat`
    FOREIGN KEY (`fky_color`)
    REFERENCES `todo_list_app`.`color` (`id_col`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fky_user_cat`
    FOREIGN KEY (`fky_user`)
    REFERENCES `todo_list_app`.`user` (`id_use`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `todo_list_app`.`task`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `todo_list_app`.`task` (
  `id_task` INT NOT NULL AUTO_INCREMENT,
  `nam_task` VARCHAR(45) NULL COMMENT 'Name of the task',
  `des_task` VARCHAR(250) NULL COMMENT 'Description of the task(optional)',
  `dat_task` DATE NULL COMMENT 'Task date',
  `tim_task` TIME NULL COMMENT 'Time of the task (optional)',
  `fky_category` INT NULL,
  `fky_color` INT NULL,
  `fky_user` INT NULL,
  `sta_imp_task` CHAR(1) NULL COMMENT 'Status of importance:\nI=Important\nN=normal',
  `sta_task` CHAR(1) NULL COMMENT 'Status of the task:\nC=Complete\nI=Incomplete\n\nDefault Vale \"I\"',
  PRIMARY KEY (`id_task`),
  INDEX `fky_categoria_idx` (`fky_category` ASC),
  INDEX `fky_usuario_idx` (`fky_user` ASC),
  INDEX `fky_color_idx` (`fky_color` ASC),
  CONSTRAINT `fky_categoria_task`
    FOREIGN KEY (`fky_category`)
    REFERENCES `todo_list_app`.`category` (`id_cat`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fky_user_task`
    FOREIGN KEY (`fky_user`)
    REFERENCES `todo_list_app`.`user` (`id_use`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fky_color_task`
    FOREIGN KEY (`fky_color`)
    REFERENCES `todo_list_app`.`color` (`id_col`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `todo_list_app`.`task_list`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `todo_list_app`.`task_list` (
  `id_task_list` INT NOT NULL AUTO_INCREMENT,
  `nam_task_list` VARCHAR(45) NULL COMMENT 'Name of the object in the list',
  `fky_task` INT NULL,
  `sta_task_list` CHAR(1) NULL COMMENT 'Status of the list:\nC=Complete\nI=Icomplete\n\ndefault value it will be \"I\"',
  PRIMARY KEY (`id_task_list`),
  INDEX `fky_task_idx` (`fky_task` ASC),
  CONSTRAINT `fky_task_lis`
    FOREIGN KEY (`fky_task`)
    REFERENCES `todo_list_app`.`task` (`id_task`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `todo_list_app`.`notification`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `todo_list_app`.`notification` (
  `id_not` INT NOT NULL AUTO_INCREMENT,
  `dat_not` DATE NULL COMMENT 'Notification date',
  `tim_not` TIME NULL COMMENT 'Notification time',
  `fky_task` INT NULL,
  `sta_not` CHAR(1) NULL COMMENT 'A=Active\nI=Inactive',
  PRIMARY KEY (`id_not`),
  INDEX `fky_task_idx` (`fky_task` ASC),
  CONSTRAINT `fky_task_not`
    FOREIGN KEY (`fky_task`)
    REFERENCES `todo_list_app`.`task` (`id_task`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
