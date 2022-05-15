<head>
    <meta charset="UTF-8">
    <title>Редактировать имя автомобиля</title>
</head>
<body>
<?php
$name_id = $_GET['name_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `car_names` WHERE `name_id`='$name_id'")->fetch_assoc();
$mysql->close(); ?>
<form method="post" action="update_car_name.php?name_id=<?= $name_id ?>">
    <input type="text" placeholder="Name" name="name" value="<?= $res['name']?>">
    <input type="text" placeholder="Model" name="model" value="<?= $res['model']?>">
    <a href="update_car_name.php?name_id=<?= $name_id?>">
        <button>Редакитровать</button>
    </a>
</form>
<a href="car_names.php">
    <button>Назад</button>
</a>
</body>
