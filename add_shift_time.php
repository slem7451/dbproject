<?php
if (!($_POST['time_in'] && $_POST['time_out']))
    header('Location: /shift_time_form.html');
else {
    $time_in = $_POST['time_in'];
    $time_out = $_POST['time_out'];
    $mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
    $mysql->query("INSERT INTO `shift_time` (`time_in`, `time_out`) VALUES('$time_in', '$time_out')");
    $mysql->close();
    header('Location: /shift_time.php');
}