<?php
if (!($_POST['time_id'] && $_POST['employee_id']))
    header('Location: /shift_form.html');
else {
    $employee_id = $_POST['employee_id'];
    $time_id = $_POST['time_id'];
    $mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
    $mysql->query("INSERT INTO `shifts` (`employee_id`, `time_id`) VALUES('$employee_id', '$time_id')");
    $mysql->close();
    header('Location: /shifts.php');
}