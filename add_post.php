<?php
if (!$_POST['name'])
    header('Location: /post_form.html');
else {
    $name = $_POST['name'];
    $mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
    $mysql->query("INSERT INTO `posts` (`name`) VALUES('$name')");
    $mysql->close();
    header('Location: /posts.php');
}