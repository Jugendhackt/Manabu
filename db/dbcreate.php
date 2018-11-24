<?php
require 'dbcon.php';

$pdo->query("
  CREATE TABLE IF NOT EXISTS 
    `user`(
      `ID` INT UNIQUE NOT NULL AUTO_INCREMENT,
      `pname` VARCHAR(20) NOT NULL,
      `lname` VARCHAR(30) NOT NULL,
      `nick` VARCHAR(10) UNIQUE NOT NULL,
      `passwd` VARCHAR(64) NOT NULL,
      `class` VARCHAR(10) NOT NULL,
      `permissions` INT NOT NULL,
      PRIMARY KEY(`ID`)
    )
    ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci
");

$pdo->query("
  CREATE TABLE IF NOT EXISTS 
    `subject`(
      `ID` INT UNIQUE NOT NULL AUTO_INCREMENT,
      `name` VARCHAR(50) NOT NULL UNIQUE,
      `desc` TEXT NOT NULL,
      PRIMARY KEY(`ID`)
    )
    ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci
");

$pdo->query("
  CREATE TABLE IF NOT EXISTS
    `class`(
      `ID` INT UNIQUE NOT NULL AUTO_INCREMENT,
      `name` VARCHAR(10) NOT NULL,
      PRIMARY KEY(`ID`)
    )
    ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci
");

$pdo->query("
  CREATE TABLE IF NOT EXISTS 
    `grade`(
      `ID` INT UNIQUE NOT NULL AUTO_INCREMENT,
      `UID` INT NOT NULL,
      `SID` INT NOT NULL,
      `grade` FLOAT NOT NULL,
      `weight` INT NOT NULL,
      /* create date */
      PRIMARY KEY(`ID`)
    )
    ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci
");
