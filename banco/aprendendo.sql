SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema aprendendo
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `aprendendo` ;
CREATE SCHEMA IF NOT EXISTS `aprendendo` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `aprendendo` ;

-- -----------------------------------------------------
-- Table `aprendendo`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aprendendo`.`usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `user_usuario` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `senha_usuario` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `nome_usuario` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `fone_usuario` VARCHAR(20) NULL DEFAULT NULL,
  `email_usuario` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `endereco_usuario` VARCHAR(100) NULL DEFAULT NULL,
  `escolaridade_usuario` VARCHAR(15) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `funcao_usuario` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `local_usuario` VARCHAR(45) NULL DEFAULT NULL,
  `permissao_usuario` VARCHAR(45) NULL DEFAULT NULL,
  `nivel_usuario` VARCHAR(1) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`, `user_usuario`, `senha_usuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `aprendendo`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aprendendo`.`aluno` (
  `id_aluno` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `nascimento_aluno` VARCHAR(10) NULL DEFAULT NULL,
  `fone_aluno` VARCHAR(20) NULL DEFAULT NULL,
  `mae_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `endereco_aluno` VARCHAR(100) NULL DEFAULT NULL,
  `escola_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `usuario_id_usuario` INT(11) NOT NULL,
  PRIMARY KEY (`id_aluno`, `usuario_id_usuario`),
  INDEX `fk_aluno_usuario1_idx` (`usuario_id_usuario` ASC),
  CONSTRAINT `fk_aluno_usuario1`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `aprendendo`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `aprendendo`.`correcao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aprendendo`.`correcao` (
  `id_correcao` INT(11) NOT NULL AUTO_INCREMENT,
  `correcao_1` VARCHAR(1) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `correcao_2` VARCHAR(1) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `correcao_3` VARCHAR(1) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `correcao_4` VARCHAR(1) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `correcao_5` VARCHAR(1) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  PRIMARY KEY (`id_correcao`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `aprendendo`.`noticia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aprendendo`.`noticia` (
  `id_noticia` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo_noticia` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `texto_noticia` VARCHAR(500) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `data_noticia` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `usuario_id_usuario` INT(11) NOT NULL,
  PRIMARY KEY (`id_noticia`, `usuario_id_usuario`),
  INDEX `fk_noticia_usuario1_idx` (`usuario_id_usuario` ASC),
  CONSTRAINT `fk_noticia_usuario1`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `aprendendo`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `aprendendo`.`teste`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aprendendo`.`teste` (
  `id_teste` INT(11) NOT NULL AUTO_INCREMENT,
  `teste_1` VARCHAR(2) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `teste_2` VARCHAR(2) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `teste_3` VARCHAR(2) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `teste_4` VARCHAR(2) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `teste_5` VARCHAR(2) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `teste_6` VARCHAR(1) CHARACTER SET 'utf8' NULL DEFAULT NULL,
  `teste_7` VARCHAR(1) CHARACTER SET 'utf8' NULL DEFAULT NULL,
  `teste_8` VARCHAR(1) CHARACTER SET 'utf8' NULL DEFAULT NULL,
  `teste_9` VARCHAR(1) CHARACTER SET 'utf8' NULL DEFAULT NULL,
  `teste_10` VARCHAR(1) CHARACTER SET 'utf8' NULL DEFAULT NULL,
  `aluno_id_aluno` INT(11) NOT NULL,
  `usuario_id_usuario` INT(11) NOT NULL,
  PRIMARY KEY (`id_teste`, `aluno_id_aluno`, `usuario_id_usuario`),
  INDEX `fk_teste_usuario_idx` (`usuario_id_usuario` ASC),
  INDEX `fk_teste_aluno1_idx` (`aluno_id_aluno` ASC),
  CONSTRAINT `fk_teste_usuario`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `aprendendo`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_teste_aluno1`
    FOREIGN KEY (`aluno_id_aluno`)
    REFERENCES `aprendendo`.`aluno` (`id_aluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
