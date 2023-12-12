<?php
$connect = new PDO("mysql:host=127.0.0.1;dbname=orders", "root", "");

if(!$connect) {
    die('Error connect to DataBase');
}

// Уберите "//" в строках ниже, чтобы создать таблицы в БД.
//$res = $connect->query("CREATE TABLE IF NOT EXISTS `orders`.`orders` (`id` INT(10) NOT NULL AUTO_INCREMENT , `type` TEXT NOT NULL , `executor` TEXT NOT NULL , `price` INT NOT NULL , `title` TEXT NOT NULL , `new` BOOLEAN NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
//$res->fetch();
