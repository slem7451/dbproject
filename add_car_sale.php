<?php
if (!$_POST['car_id'])
    header('Location: /car_sale_form.html');
else {
    $car_id = $_POST['car_id'];
    $mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
    $mysql->query("INSERT INTO `car_sales` (`car_id`) VALUES('$car_id')");
    $mysql->close();
    header('Location: /car_sales.php');
}