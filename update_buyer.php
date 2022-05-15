<?php
$buyer_id = $_GET['buyer_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$name = $_POST['name'];
$surname = $_POST['surname'];
$adress = $_POST['adress'];
$passport = $_POST['passport'];
$mysql->query("UPDATE `buyers` SET `name`='$name', `surname`='$surname', `adress`='$adress', `passport`='$passport' WHERE `buyer_id`='$buyer_id'");
$mysql->close();
header('Location: /buyers.php');