<?php
$time_id = $_GET['time_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$time_in = $_POST['time_in'];
$time_out = $_POST['time_out'];
$mysql->query("UPDATE `shift_time` SET `time_in`='$time_in', `time_out`='$time_out' WHERE `time_id`='$time_id'");
$mysql->close();
header('Location: /shift_time.php');