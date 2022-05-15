<?php
$sale_id = $_GET['sale_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$mysql->query("DELETE FROM `sales` WHERE `sale_id`='$sale_id'");
$mysql->query("ALTER TABLE `sales` AUTO_INCREMENT=0;");
$mysql->close();
header('Location: /sales.php');