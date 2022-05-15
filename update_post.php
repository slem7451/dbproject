<?php
$post_id = $_GET['post_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$name = $_POST['name'];
$mysql->query("UPDATE `posts` SET `name`='$name' WHERE `post_id`='$post_id'");
$mysql->close();
header('Location: /posts.php');