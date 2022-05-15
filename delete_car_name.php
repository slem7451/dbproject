<?php
$name_id = $_GET['name_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$mysql->query("DELETE FROM `car_names` WHERE `name_id`='$name_id'");
$mysql->query("ALTER TABLE `car_names` AUTO_INCREMENT=0;");
$mysql->close();
header('Location: /car_names.php');