<?php
$buyer_id = $_GET['buyer_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$mysql->query("DELETE FROM `buyers` WHERE `buyer_id`='$buyer_id'");
$mysql->query("ALTER TABLE `buyers` AUTO_INCREMENT=0;");
$mysql->close();
header('Location: /buyers.php');