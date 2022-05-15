<?php
$car_id = $_GET['car_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$mysql->query("DELETE FROM `cars` WHERE `car_id`='$car_id'");
$mysql->query("ALTER TABLE `cars` AUTO_INCREMENT=0;");
$mysql->close();
header('Location: /cars.php');