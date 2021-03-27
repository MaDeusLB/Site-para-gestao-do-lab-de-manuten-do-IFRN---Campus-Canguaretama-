-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema sistema
-- -----------------------------------------------------
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`aluno` (
  `matricula` VARCHAR(40) NOT NULL,
  `nome` VARCHAR(120) NOT NULL,
  `turma` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`matricula`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`equipamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`equipamento` (
  `idequipamento` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `localizacao` VARCHAR(60) NOT NULL,
  `descricao` TEXT NULL,
  PRIMARY KEY (`idequipamento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`manutencao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`manutencao` (
  `idmanutencao` INT NOT NULL AUTO_INCREMENT,
  `datamanutencao` DATE NOT NULL,
  `atividade` CHAR(3) NOT NULL,
  `localizacao` VARCHAR(45) NOT NULL,
  `descricao` TEXT NULL,
  `aluno_matricula` VARCHAR(40) NOT NULL,
  `equipamento_idequipamento` INT NOT NULL,
  PRIMARY KEY (`idmanutencao`),
  INDEX `fk_manutencao_aluno1_idx` (`aluno_matricula` ASC) VISIBLE,
  INDEX `fk_manutencao_equipamento1_idx` (`equipamento_idequipamento` ASC) VISIBLE,
  CONSTRAINT `fk_manutencao_aluno1`
    FOREIGN KEY (`aluno_matricula`)
    REFERENCES `mydb`.`aluno` (`matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_manutencao_equipamento1`
    FOREIGN KEY (`equipamento_idequipamento`)
    REFERENCES `mydb`.`equipamento` (`idequipamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`peca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`peca` (
  `idpeca` INT NOT NULL AUTO_INCREMENT,
  `nomepeca` VARCHAR(100) NOT NULL,
  `compimp` TINYINT(2) NOT NULL,
  `descricao` TEXT NULL,
  `marcapeca` VARCHAR(45) NULL,
  PRIMARY KEY (`idpeca`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ferramenta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ferramenta` (
  `idferramenta` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `marca` VARCHAR(45) NULL,
  `descricao` TEXT NULL,
  PRIMARY KEY (`idferramenta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`colaborador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`colaborador` (
  `idcolab` INT NOT NULL AUTO_INCREMENT,
  `nomecolab` VARCHAR(120) NOT NULL,
  `matricula` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcolab`))
ENGINE = InnoDB;

INSERT INTO `colaborador` (`idcolab`, `nomecolab`, `matricula`, `senha`) VALUES (NULL, 'Matheus de Lima', '20171194010005', 'ab7cefa70598d890c2f9093a1a7cc346e9aadc39');


-- -----------------------------------------------------
-- Table `mydb`.`item_manutencao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`item_manutencao` (
  `iditem_manutencao` INT NOT NULL AUTO_INCREMENT,
  `manutencao_idmanutencao` INT NOT NULL,
  `peca_idpeca` INT NOT NULL,
  `descricao` TEXT NULL,
  PRIMARY KEY (`iditem_manutencao`),
  INDEX `fk_item_manutencao_manutencao1_idx` (`manutencao_idmanutencao` ASC) VISIBLE,
  INDEX `fk_item_manutencao_peca1_idx` (`peca_idpeca` ASC) VISIBLE,
  CONSTRAINT `fk_item_manutencao_manutencao1`
    FOREIGN KEY (`manutencao_idmanutencao`)
    REFERENCES `mydb`.`manutencao` (`idmanutencao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_manutencao_peca1`
    FOREIGN KEY (`peca_idpeca`)
    REFERENCES `mydb`.`peca` (`idpeca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
