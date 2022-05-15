<?php
$category_id = $_GET['category_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$mysql->query("DELETE FROM `categories` WHERE `category_id`='$category_id'");
$mysql->query("ALTER TABLE `categories` AUTO_INCREMENT=0;");
$mysql->close();
header('Location: /categories.php');