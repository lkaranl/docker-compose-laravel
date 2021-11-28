

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sgen_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sgen_db
-- -----------------------------------------------------
#CREATE SCHEMA IF NOT EXISTS `sgen_db` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema sgen_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sgen_db
-- -----------------------------------------------------
#CREATE SCHEMA IF NOT EXISTS `sgen_db` DEFAULT CHARACTER SET utf8 ;
USE `sgen_db` ;



-- -----------------------------------------------------
-- Table `sgen_db`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(16) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



-- -----------------------------------------------------
-- Table `sgen_db`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`estado` (
  `id_estado` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `sigla` VARCHAR(2) NOT NULL,
  PRIMARY KEY (`id_estado`),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC),
  UNIQUE INDEX `sigla_UNIQUE` (`sigla` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;




-- -----------------------------------------------------
-- Table `sgen_db`.`ultima_milha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`ultima_milha` (
  `id_ultima_milha` INT(11) NOT NULL AUTO_INCREMENT,
  `fantasia` VARCHAR(255) NOT NULL,
  `razao_social` VARCHAR(255) NOT NULL,
  `cnpj` VARCHAR(14) NOT NULL,
  `telefone` VARCHAR(45) NULL DEFAULT NULL,
  `cep` VARCHAR(12) NULL DEFAULT NULL,
  `endereco` VARCHAR(255) NULL DEFAULT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id_ultima_milha`),
  UNIQUE INDEX `nome_UNIQUE` (`fantasia` ASC),
  UNIQUE INDEX `razao_social_UNIQUE` (`razao_social` ASC),
  UNIQUE INDEX `cnpj_UNIQUE` (`cnpj` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sgen_db`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`cidade` (
  `id_cidade` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `sigla` VARCHAR(6) NOT NULL,
  `estado_id_estado` INT(11) NOT NULL,
  `ultima_milha_id_ultima_milha` INT(11) NOT NULL,
  PRIMARY KEY (`id_cidade`, `estado_id_estado`, `ultima_milha_id_ultima_milha`),
  UNIQUE INDEX `sigla_UNIQUE` (`sigla` ASC),
  INDEX `fk_cidade_estado1_idx` (`estado_id_estado` ASC),
  INDEX `fk_cidade_ultima_milha1_idx` (`ultima_milha_id_ultima_milha` ASC),
  CONSTRAINT `fk_cidade_estado1`
    FOREIGN KEY (`estado_id_estado`)
    REFERENCES `sgen_db`.`estado` (`id_estado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cidade_ultima_milha1`
    FOREIGN KEY (`ultima_milha_id_ultima_milha`)
    REFERENCES `sgen_db`.`ultima_milha` (`id_ultima_milha`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `sgen_db`.`faixa_administrativa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`faixa_administrativa` (
  `id_faixa_administrativa` INT(11) NOT NULL AUTO_INCREMENT,
  `ip` VARCHAR(45) NOT NULL,
  `mascara` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_faixa_administrativa`),
  UNIQUE INDEX `ip_UNIQUE` (`ip` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sgen_db`.`site`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`site` (
  `id_site` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `sigla` VARCHAR(45) NOT NULL,
  `faixa_administrativa_id_faixa_administrativa` INT(11) NOT NULL,
  PRIMARY KEY (`id_site`, `faixa_administrativa_id_faixa_administrativa`),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC),
  UNIQUE INDEX `sigla_UNIQUE` (`sigla` ASC),
  INDEX `fk_site_faixa_administrativa1_idx` (`faixa_administrativa_id_faixa_administrativa` ASC),
  CONSTRAINT `fk_site_faixa_administrativa1`
    FOREIGN KEY (`faixa_administrativa_id_faixa_administrativa`)
    REFERENCES `sgen_db`.`faixa_administrativa` (`id_faixa_administrativa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;





-- -----------------------------------------------------
-- Table `sgen_db`.`funcao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`funcao` (
  `id_funcao` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_funcao`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sgen_db`.`equipamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`equipamento` (
  `id_equipamento` INT(11) NOT NULL AUTO_INCREMENT,
  `marca` VARCHAR(255) NULL DEFAULT NULL,
  `modelo` VARCHAR(255) NULL DEFAULT NULL,
  `serial` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id_equipamento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;





-- -----------------------------------------------------
-- Table `sgen_db`.`ativos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`ativos` (
  `id_ativos` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(255) NOT NULL,
  `ip_legado` VARCHAR(45) NULL DEFAULT NULL,
  `ip` VARCHAR(45) NOT NULL,
  `terminacao` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `ativo` TINYINT(4) NOT NULL,
  `data_create` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `data_update` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `observacao` VARCHAR(255) NULL DEFAULT NULL,
  `funcao_id_funcao` INT(11) NOT NULL,
  `equipamento_id_equipamento` INT(11) NOT NULL,
  `site_id_site` INT(11) NOT NULL,
  PRIMARY KEY (`id_ativos`, `funcao_id_funcao`, `equipamento_id_equipamento`, `site_id_site`),
  UNIQUE INDEX `ip_UNIQUE` (`ip` ASC),
  UNIQUE INDEX `ip_legado_UNIQUE` (`ip_legado` ASC),
  INDEX `fk_ativos_funcao1_idx` (`funcao_id_funcao` ASC),
  INDEX `fk_ativos_equipamento1_idx` (`equipamento_id_equipamento` ASC),
  INDEX `fk_ativos_site1_idx` (`site_id_site` ASC),
  CONSTRAINT `fk_ativos_funcao1`
    FOREIGN KEY (`funcao_id_funcao`)
    REFERENCES `sgen_db`.`funcao` (`id_funcao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ativos_equipamento1`
    FOREIGN KEY (`equipamento_id_equipamento`)
    REFERENCES `sgen_db`.`equipamento` (`id_equipamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ativos_site1`
    FOREIGN KEY (`site_id_site`)
    REFERENCES `sgen_db`.`site` (`id_site`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sgen_db`.`enlace`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`enlace` (
  `id_enlace` INT(11) NOT NULL AUTO_INCREMENT,
  `mlink` VARCHAR(45) NOT NULL,
  `mestre` VARCHAR(45) NOT NULL,
  `escravo` VARCHAR(45) NOT NULL,
  `faixa` VARCHAR(45) NOT NULL,
  `route_mestre` VARCHAR(45) NOT NULL,
  `route_escravo` VARCHAR(45) NOT NULL,
  `observacoes` VARCHAR(255) NULL DEFAULT NULL,
  `ativos_id_ativos1` INT(11) NOT NULL,
  `ativos_id_ativos2` INT(11) NOT NULL,
  PRIMARY KEY (`id_enlace`, `ativos_id_ativos1`, `ativos_id_ativos2`),
  UNIQUE INDEX `faixa_UNIQUE` (`faixa` ASC),
  UNIQUE INDEX `mlink_UNIQUE` (`mlink` ASC),
  UNIQUE INDEX `route_mestre_UNIQUE` (`route_mestre` ASC),
  UNIQUE INDEX `route_escravo_UNIQUE` (`route_escravo` ASC),
  INDEX `fk_enlace_ativos1_idx` (`ativos_id_ativos1` ASC),
  INDEX `fk_enlace_ativos2_idx` (`ativos_id_ativos2` ASC),
  CONSTRAINT `fk_enlace_ativos1`
    FOREIGN KEY (`ativos_id_ativos1`)
    REFERENCES `sgen_db`.`ativos` (`id_ativos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_enlace_ativos2`
    FOREIGN KEY (`ativos_id_ativos2`)
    REFERENCES `sgen_db`.`ativos` (`id_ativos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sgen_db`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`cliente` (
  `id_cliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sgen_db`.`svc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`svc` (
  `id_svc` INT(11) NOT NULL AUTO_INCREMENT,
  `identificador` VARCHAR(45) NOT NULL,
  `svct` VARCHAR(2) NOT NULL,
  `banda` INT(11) NULL DEFAULT NULL,
  `informacoes` VARCHAR(255) NOT NULL,
  `data_create` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `data_update` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id_svc`),
  UNIQUE INDEX `identificador_UNIQUE` (`identificador` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `sgen_db`.`lmc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`lmc` (
  `id_lmc` INT(11) NOT NULL AUTO_INCREMENT,
  `identificador` VARCHAR(45) NOT NULL,
  `spid` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `ce_identify` VARCHAR(255) NOT NULL,
  `cidade_id_cidade` INT(11) NOT NULL,
  `cliente_id_cliente` INT(11) NOT NULL,
  `ativos_id_ativos` INT(11) NOT NULL,
  PRIMARY KEY (`id_lmc`, `cidade_id_cidade`, `ativos_id_ativos`),
  UNIQUE INDEX `identificador_UNIQUE` (`identificador` ASC),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC),
  INDEX `fk_lmc_cidade1_idx` (`cidade_id_cidade` ASC),
  INDEX `fk_lmc_cliente1_idx` (`cliente_id_cliente` ASC),
  INDEX `fk_lmc_ativos1_idx` (`ativos_id_ativos` ASC),
  CONSTRAINT `fk_lmc_cidade1`
    FOREIGN KEY (`cidade_id_cidade`)
    REFERENCES `sgen_db`.`cidade` (`id_cidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_lmc_cliente1`
    FOREIGN KEY (`cliente_id_cliente`)
    REFERENCES `sgen_db`.`cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_lmc_ativos1`
    FOREIGN KEY (`ativos_id_ativos`)
    REFERENCES `sgen_db`.`ativos` (`id_ativos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sgen_db`.`lmx`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`lmx` (
  `id_lmx` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL DEFAULT NULL,
  `faixa_gerencia` VARCHAR(45) NULL DEFAULT NULL,
  `lmce` VARCHAR(45) NULL DEFAULT NULL,
  `vlan_gerencia` VARCHAR(45) NULL DEFAULT NULL,
  `observacoes` VARCHAR(255) NULL DEFAULT NULL,
  `controle` TINYINT(4) NOT NULL,
  `controle_data` TIMESTAMP NULL DEFAULT NULL,
  `data_create` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `data_update` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `lmc_id_lmc` INT(11) NOT NULL,
  PRIMARY KEY (`id_lmx`, `lmc_id_lmc`),
  INDEX `fk_lmx_lmc1_idx` (`lmc_id_lmc` ASC),
  CONSTRAINT `fk_lmx_lmc1`
    FOREIGN KEY (`lmc_id_lmc`)
    REFERENCES `sgen_db`.`lmc` (`id_lmc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;




-- -----------------------------------------------------
-- Table `sgen_db`.`svc_lmc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sgen_db`.`svc_lmc` (
  `id_svc_lmc` INT(11) NOT NULL AUTO_INCREMENT,
  `in_vlan` VARCHAR(45) NULL DEFAULT NULL,
  `out_vlan` VARCHAR(45) NULL DEFAULT NULL,
  `peering_mrouter` VARCHAR(45) NULL DEFAULT NULL,
  `peering_cliente1` VARCHAR(45) NULL DEFAULT NULL,
  `peering_cliente2` VARCHAR(45) NULL DEFAULT NULL,
  `distinguisher` VARCHAR(45) NULL DEFAULT NULL,
  `observacoes` VARCHAR(255) NULL DEFAULT NULL,
  `svc_id_svc` INT(11) NOT NULL,
  `lmc_id_lmc` INT(11) NOT NULL,
  PRIMARY KEY (`id_svc_lmc`, `svc_id_svc`, `lmc_id_lmc`),
  INDEX `fk_svc_lmc_svc_idx` (`svc_id_svc` ASC),
  INDEX `fk_svc_lmc_lmc1_idx` (`lmc_id_lmc` ASC),
  CONSTRAINT `fk_svc_lmc_svc`
    FOREIGN KEY (`svc_id_svc`)
    REFERENCES `sgen_db`.`svc` (`id_svc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_svc_lmc_lmc1`
    FOREIGN KEY (`lmc_id_lmc`)
    REFERENCES `sgen_db`.`lmc` (`id_lmc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


INSERT INTO `users` (`id`, `name`, `surname`, `cpf`, `birth`, `sex`, `city`, `state`, `cep`, `address`, `telephone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Karan Lucino', 'Silva', '001.013.862-78', '1992-08-06', 'Masculino', 'Jiparana', 'Rondonia', '78390-000', 'Rua adeildo', '(69)99237-0744', 'seguro@gmail.com', NULL, '$2y$10$4SqGLDH1x4e.W9cXNiks.OxrRZBpS2Zv7oOOcdMYMZr8PhUwvtX.m', NULL, '2021-05-06 00:46:52', '2021-05-06 00:46:52');


-- SET SQL_MODE=@OLD_SQL_MODE;
-- SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
-- SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

