<?php
$sale_id = $_GET['sale_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$car_id = $_POST['car_id'];
$employee_id = $_POST['employee_id'];
$buyer_id = $_POST['buyer_id'];
$date = $_POST['date'];
$mysql->query("UPDATE `sales` SET `car_id`='$car_id', `employee_id`='$employee_id', `buyer_id`='$buyer_id', `date`='$date' WHERE `sale_id`='$sale_id'");
$mysql->close();
header('Location: /sales.php');