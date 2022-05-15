<?php
if (!($_POST['category_id'] && $_POST['name_id'] && $_POST['price'] && $_POST['color']))
    header('Location: /car_form.html');
else {
    $name_id = $_POST['name_id'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $color = $_POST['color'];
    $mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
    $mysql->query("INSERT INTO `cars` (`category_id`, `name_id`, `price`, `color`) VALUES('$category_id', '$name_id', '$price', '$color')");
    $mysql->close();
    header('Location: /cars.php');
}
