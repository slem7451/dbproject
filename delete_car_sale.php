<?php
$car_sale_id = $_GET['car_sale_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$mysql->query("DELETE FROM `car_sales` WHERE `car_sale_id`='$car_sale_id'");
$mysql->query("ALTER TABLE `car_sales` AUTO_INCREMENT=0;");
$mysql->close();
header('Location: /car_sales.php');