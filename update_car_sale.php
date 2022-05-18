<?php
$car_sale_id = $_GET['car_sale_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$car_id = $_POST['car_id'];
$mysql->query("UPDATE `car_sales` SET `car_id`='$car_id' WHERE `car_sale_id`='$car_sale_id'");
$mysql->close();
header('Location: /car_sales.php');