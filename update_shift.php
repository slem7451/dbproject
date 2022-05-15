<?php
$shift_id = $_GET['shift_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$employee_id = $_POST['employee_id'];
$time_id = $_POST['time_id'];
$mysql->query("UPDATE `shifts` SET `employee_id`='$employee_id', `time_id`='$time_id' WHERE `shift_id`='$shift_id'");
$mysql->close();
header('Location: /shifts.php');