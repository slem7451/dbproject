<?php
$category_id = $_GET['category_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$fuel_type = $_POST['fuel_type'];
$release_date = $_POST['release_date'];
$body = $_POST['body'];
$engine_capacity = $_POST['engine_capacity'];
$mysql->query("UPDATE `categories` SET `fuel_type`='$fuel_type', `release_date`='$release_date', `body`='$body', `engine_capacity`='$engine_capacity' WHERE `category_id`='$category_id'");
$mysql->close();
header('Location: /categories.php');