<?php
$time_id = $_GET['time_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$mysql->query("DELETE FROM `shift_time` WHERE `time_id`='$time_id'");
$mysql->query("ALTER TABLE `shift_time` AUTO_INCREMENT=0;");
$mysql->close();
header('Location: /shift_time.php');