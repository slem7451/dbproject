<?php
$shift_id = $_GET['shift_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$mysql->query("DELETE FROM `shifts` WHERE `shift_id`='$shift_id'");
$mysql->query("ALTER TABLE `shifts` AUTO_INCREMENT=0;");
$mysql->close();
header('Location: /shifts.php');
