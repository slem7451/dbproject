<head>
    <meta charset="UTF-8">
    <title>Редактировать автомобиль</title>
</head>
<body>
<?php
$car_id = $_GET['car_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `cars` WHERE `car_id`='$car_id'")->fetch_assoc();
$mysql->close(); ?>
<form method="post" action="update_car.php?car_id=<?= $car_id ?>">
    <input type="text" placeholder="Category id" name="category_id" value="<?= $res['category_id']?>">
    <input type="text" placeholder="Name id" name="name_id" value="<?= $res['name_id']?>">
    <input type="text" placeholder="Price" name="price" value="<?= $res['price']?>">
    <input type="text" placeholder="Color" name="color" value="<?= $res['color']?>">
    <a href="update_car.php?car_id=<?= $car_id?>">
        <button>Редакитровать</button>
    </a>
</form>
<a href="cars.php">
    <button>Назад</button>
</a>
</body>
