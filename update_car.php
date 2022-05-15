<?php
$car_id = $_GET['car_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$category_id = $_POST['category_id'];
$name_id = $_POST['name_id'];
$price = $_POST['price'];
$color = $_POST['color'];
$mysql->query("UPDATE `cars` SET `category_id`='$category_id', `name_id`='$name_id', `price`='$price', `color`='$color' WHERE `car_id`='$car_id'");
$mysql->close();
header('Location: /cars.php');