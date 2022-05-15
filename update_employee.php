<?php
$employee_id = $_GET['employee_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$name = $_POST['name'];
$post_id = $_POST['post_id'];
$surname = $_POST['surname'];
$salary = $_POST['salary'];
$mysql->query("UPDATE `employers` SET `post_id`='$post_id', `name`='$name', `surname`='$surname', `salary`='$salary' WHERE `employee_id`='$employee_id'");
$mysql->close();
header('Location: /employers.php');