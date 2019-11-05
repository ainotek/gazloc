-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema kenza_db
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `kenza_db` ;

-- -----------------------------------------------------
-- Schema kenza_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `kenza_db` DEFAULT CHARACTER SET utf8 ;
USE `kenza_db` ;

-- -----------------------------------------------------
-- Table `kenza_db`.`stores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kenza_db`.`stores` ;

CREATE TABLE IF NOT EXISTS `kenza_db`.`stores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `phone` VARCHAR(255) NULL,
  `name` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `description` VARCHAR(255) NULL,
  `longitude` DECIMAL(10,3) NULL,
  `latitude` DECIMAL(10,3) NULL,
  `rating` INT NULL,
  `voted` INT NULL,
  `active` TINYINT NULL,
  `created_at` DATETIME NULL DEFAULT now(),
  `updated_at` DATETIME NULL DEFAULT now() on update now(),
  `city` VARCHAR(255) NULL,
  `location` VARCHAR(255) NULL,
  `picture` VARCHAR(255) NULL,
  `expire_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kenza_db`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kenza_db`.`users` ;

CREATE TABLE IF NOT EXISTS `kenza_db`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `stores_id` INT NOT NULL,
  `email` VARCHAR(255) NULL,
  `phone` VARCHAR(255) NULL,
  `password` VARCHAR(255) NULL,
  `name` VARCHAR(255) NULL,
  `role` VARCHAR(255) NULL,
  `active` TINYINT NULL,
  `last_login` DATETIME NULL,
  `remember_token` VARCHAR(255) NULL,
  `expire_at` DATETIME NULL,
  `created_at` DATETIME NULL DEFAULT now(),
  `updated_at` DATETIME NULL DEFAULT now() on update now(),
  `status` VARCHAR(255) NULL,
  `email_verified_at` DATETIME NULL,
  `api_token` VARCHAR(255) NULL,
  `picture` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users_stores1_idx` (`stores_id` ASC),
  UNIQUE INDEX `api_token_UNIQUE` (`api_token` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `phone_UNIQUE` (`phone` ASC),
  CONSTRAINT `fk_users_stores1`
    FOREIGN KEY (`stores_id`)
    REFERENCES `kenza_db`.`stores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kenza_db`.`customers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kenza_db`.`customers` ;

CREATE TABLE IF NOT EXISTS `kenza_db`.`customers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NULL,
  `phone` VARCHAR(255) NULL,
  `password` VARCHAR(255) NULL,
  `last_password` VARCHAR(255) NULL,
  `first_name` VARCHAR(255) NULL,
  `last_name` VARCHAR(255) NULL,
  `newsletter` TINYINT NULL,
  `active` TINYINT NULL,
  `created_at` DATETIME NULL DEFAULT now() on update now(),
  `updated_at` DATETIME NULL DEFAULT now(),
  `device` VARCHAR(255) NULL,
  `expire_at` DATETIME NULL,
  `last_login` DATETIME NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `phone_UNIQUE` (`phone` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kenza_db`.`suppliers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kenza_db`.`suppliers` ;

CREATE TABLE IF NOT EXISTS `kenza_db`.`suppliers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `phone` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `active` TINYINT NULL,
  `created_at` DATETIME NULL DEFAULT now(),
  `updated_at` DATETIME NULL DEFAULT now() on update now(),
  `logo` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kenza_db`.`products`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kenza_db`.`products` ;

CREATE TABLE IF NOT EXISTS `kenza_db`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `desciption` VARCHAR(255) NULL,
  `suppliers_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_products_suppliers1_idx` (`suppliers_id` ASC),
  CONSTRAINT `fk_products_suppliers1`
    FOREIGN KEY (`suppliers_id`)
    REFERENCES `kenza_db`.`suppliers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kenza_db`.`orders`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kenza_db`.`orders` ;

CREATE TABLE IF NOT EXISTS `kenza_db`.`orders` (
  `id` BIGINT(20) NOT NULL,
  `customers_id` INT NOT NULL,
  `state` VARCHAR(255) NULL,
  `order_number` INT NULL,
  `created_at` DATETIME NULL DEFAULT now(),
  `updated_at` DATETIME NULL DEFAULT now() on update now(),
  PRIMARY KEY (`id`),
  INDEX `fk_orders_customers1_idx` (`customers_id` ASC),
  CONSTRAINT `fk_orders_customers1`
    FOREIGN KEY (`customers_id`)
    REFERENCES `kenza_db`.`customers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kenza_db`.`hours`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kenza_db`.`hours` ;

CREATE TABLE IF NOT EXISTS `kenza_db`.`hours` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `stores_id` INT NOT NULL,
  `day` INT NULL,
  `open` TIME NULL,
  `close` TIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_hours_stores1_idx` (`stores_id` ASC),
  CONSTRAINT `fk_hours_stores1`
    FOREIGN KEY (`stores_id`)
    REFERENCES `kenza_db`.`stores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kenza_db`.`services`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kenza_db`.`services` ;

CREATE TABLE IF NOT EXISTS `kenza_db`.`services` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `description` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kenza_db`.`logs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kenza_db`.`logs` ;

CREATE TABLE IF NOT EXISTS `kenza_db`.`logs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `action` VARCHAR(255) NULL,
  `object_type` VARCHAR(255) NULL,
  `object_id` VARCHAR(255) NULL,
  `status` VARCHAR(255) NULL,
  `message` VARCHAR(255) NULL,
  `created_at` DATETIME NULL DEFAULT now(),
  `updated_at` DATETIME NULL DEFAULT now() on update now(),
  `users_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_logs_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_logs_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `kenza_db`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kenza_db`.`offered_services`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kenza_db`.`offered_services` ;

CREATE TABLE IF NOT EXISTS `kenza_db`.`offered_services` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `services_id` INT NOT NULL,
  `stores_id` INT NOT NULL,
  `active` TINYINT NULL,
  `price` INT NULL,
  `created_at` DATETIME NULL DEFAULT now(),
  `updated_at` DATETIME NULL DEFAULT now() on update now(),
  PRIMARY KEY (`id`),
  INDEX `fk_offered_services_services1_idx` (`services_id` ASC),
  INDEX `fk_offered_services_stores1_idx` (`stores_id` ASC),
  CONSTRAINT `fk_offered_services_services1`
    FOREIGN KEY (`services_id`)
    REFERENCES `kenza_db`.`services` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `fk_offered_services_stores1`
    FOREIGN KEY (`stores_id`)
    REFERENCES `kenza_db`.`stores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kenza_db`.`stores_products`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kenza_db`.`stores_products` ;

CREATE TABLE IF NOT EXISTS `kenza_db`.`stores_products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `products_id` INT NOT NULL,
  `stores_id` INT NOT NULL,
  `active` TINYINT NULL,
  `quatity` INT NULL,
  `price` INT NULL,
  `created_at` DATETIME NULL DEFAULT now(),
  `updated_at` DATETIME NULL DEFAULT now() on update now(),
  PRIMARY KEY (`id`),
  INDEX `fk_stores_products_products1_idx` (`products_id` ASC),
  INDEX `fk_stores_products_stores1_idx` (`stores_id` ASC),
  CONSTRAINT `fk_stores_products_products1`
    FOREIGN KEY (`products_id`)
    REFERENCES `kenza_db`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `fk_stores_products_stores1`
    FOREIGN KEY (`stores_id`)
    REFERENCES `kenza_db`.`stores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kenza_db`.`product_orders`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kenza_db`.`product_orders` ;

CREATE TABLE IF NOT EXISTS `kenza_db`.`product_orders` (
  `id` INT NOT NULL,
  `products_id` INT NOT NULL,
  `orders_id` BIGINT(20) NOT NULL,
  `quantity` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_product_orders_products1_idx` (`products_id` ASC),
  INDEX `fk_product_orders_orders1_idx` (`orders_id` ASC),
  CONSTRAINT `fk_product_orders_products1`
    FOREIGN KEY (`products_id`)
    REFERENCES `kenza_db`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `fk_product_orders_orders1`
    FOREIGN KEY (`orders_id`)
    REFERENCES `kenza_db`.`orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
