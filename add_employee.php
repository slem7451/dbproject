<?php
if (!($_POST['name'] && $_POST['surname'] && $_POST['salary'] && $_POST['post_id']))
    header('Location: /employee_form.html');
else {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $salary = $_POST['salary'];
    $post_id = $_POST['post_id'];
    $mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
    $mysql->query("INSERT INTO `employers` (`post_id`, `name`, `surname`, `salary`) VALUES('$post_id', '$name', '$surname', '$salary')");
    $mysql->close();
    header('Location: /employers.php');
}
