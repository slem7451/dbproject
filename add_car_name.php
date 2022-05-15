<?php
if (!($_POST['name'] && $_POST['model']))
    header('Location: /car_name_form.html');
else {
    $name = $_POST['name'];
    $model = $_POST['model'];
    $mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
    $mysql->query("INSERT INTO `car_names` (`name`, `model`) VALUES('$name', '$model')");
    $mysql->close();
    header('Location: /car_names.php');
}
