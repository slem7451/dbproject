<?php
if (!($_POST['car_id'] && $_POST['employee_id'] && $_POST['buyer_id'] && $_POST['date']))
    header('Location: /sale_form.html');
else {
    $car_id = $_POST['car_id'];
    $employee_id = $_POST['employee_id'];
    $buyer_id = $_POST['buyer_id'];
    $date = $_POST['date'];
    $mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
    $mysql->query("INSERT INTO `sales` (`car_id`, `employee_id`, `buyer_id`, `date`) VALUES('$car_id', '$employee_id', '$buyer_id', '$date')");
    $mysql->close();
    header('Location: /sales.php');
}
