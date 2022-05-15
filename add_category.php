<?php
if (!($_POST['fuel_type'] && $_POST['engine_capacity'] && $_POST['release_date'] && $_POST['body']))
    header('Location: /category_form.html');
else {
    $fuel_type = $_POST['fuel_type'];
    $engine_capacity = $_POST['engine_capacity'];
    $release_date = $_POST['release_date'];
    $body = $_POST['body'];
    $mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
    $mysql->query("INSERT INTO `categories` (`fuel_type`, `release_date`, `body`, `engine_capacity`) VALUES('$fuel_type', '$release_date', '$body', '$engine_capacity')");
    $mysql->close();
    header('Location: /categories.php');
}
