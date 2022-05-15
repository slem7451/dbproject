<?php
$employee_id = $_GET['employee_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$mysql->query("DELETE FROM `employers` WHERE `employee_id`='$employee_id'");
$mysql->query("ALTER TABLE `employers` AUTO_INCREMENT=0;");
$mysql->close();
header('Location: /employers.php');