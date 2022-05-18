<head>
    <meta charset="UTF-8">
    <title>Редактировать автомобиль</title>
</head>
<body>
<?php
$car_sale_id = $_GET['car_sale_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `car_sales` WHERE `car_sale_id`='$car_sale_id'")->fetch_assoc();
$mysql->close(); ?>
<form method="post" action="update_car_sale.php?car_sale_id=<?= $car_sale_id ?>">
    <input type="text" placeholder="Car id" name="car_id" value="<?= $res['car_id']?>">
    <a href="update_car_sale.php?car_sale_id=<?= $car_sale_id?>">
        <button>Редакитровать</button>
    </a>
</form>
<a href="car_sales.php">
    <button>Назад</button>
</a>
</body>
