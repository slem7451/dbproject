<?php
$post_id = $_GET['post_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$mysql->query("DELETE FROM `posts` WHERE `post_id`='$post_id'");
$mysql->query("ALTER TABLE `posts` AUTO_INCREMENT=0;");
$mysql->close();
header('Location: /posts.php');