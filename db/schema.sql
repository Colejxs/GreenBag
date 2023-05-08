DROP DATABASE IF EXISTS `GreenBag`;

CREATE DATABASE `GreenBag`;

USE `GreenBag`;

CREATE TABLE `Users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(45) NOT NULL,
  `user_last_name` varchar(45) NOT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(45) DEFAULT NULL,
  `user_address` varchar(45) DEFAULT NULL,
  `user_ship_week` int DEFAULT NULL,
  `user_pickup_day` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `GreenBag`.`ShoppingList` (
  `sList_id` INT NOT NULL AUTO_INCREMENT,
  `sList_type` VARCHAR(45) NULL,
  `sLIst_shelf_location` VARCHAR(45) NULL,
  `sList_designation` VARCHAR(45) NULL,
  `sList_brand` VARCHAR(45) NULL,
  `sList_product_name` VARCHAR(45) NULL,
  PRIMARY KEY (`sList_id`));