<?php
$name_id = $_GET['name_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$name = $_POST['name'];
$model = $_POST['model'];
$mysql->query("UPDATE `car_names` SET `name`='$name', `model`='$model' WHERE `name_id`='$name_id'");
$mysql->close();
header('Location: /car_names.php');