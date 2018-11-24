<?php
require 'dbcon.php';

$pdo->query("
  CREATE TABLE IF NOT EXISTS 
    `User`(
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
    `Subject`(
      `ID` INT UNIQUE NOT NULL AUTO_INCREMENT,
      `name` VARCHAR(20) NOT NULL,
      `abbr` VARCHAR(10) NOT NULL,
      `desc` VARCHAR NOT NULL,
      PRIMARY KEY(`ID`)
    )
    ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci
");

$pdo->query("
  CREATE TABLE IF NOT EXISTS
    `Class`(
      `ID` INT UNIQUE NOT NULL AUTO_INCREMENT,
      `name` VARCHAR(10) NOT NULL,
      PRIMARY KEY(`KEY`)
    )
    ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci
");

// join
