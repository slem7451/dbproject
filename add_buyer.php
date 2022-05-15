<?php
if (!($_POST['name'] && $_POST['surname'] && $_POST['adress'] && $_POST['passport']))
    header('Location: /buyer_form.html');
else {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $adress = $_POST['adress'];
    $passport = $_POST['passport'];
    $mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
    $mysql->query("INSERT INTO `buyers` (`name`, `surname`, `adress`, `passport`) VALUES('$name', '$surname', '$adress', '$passport')");
    $mysql->close();
    header('Location: /buyers.php');
}
