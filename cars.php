<head>
    <meta charset="UTF-8">
    <title>Cars</title>
</head>
<body>
<?php
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `cars`");
$posts = array();
while ($row = $res->fetch_assoc())
    $posts[] = $row;
array_multisort($posts);
foreach ($posts as $post):
    ?>
    <div style="border-top-style: solid; border-bottom-style: solid; border-width: 1px;">
        <p>Car ID: <?= $post['car_id'] ?></p>
        <p>Category ID: <?= $post['category_id'] ?></p>
        <p>Name ID: <?= $post['name_id'] ?></p>
        <p>Price: <?= $post['price'] ?></p>
        <p>Color: <?= $post['color'] ?></p>
        <a href="delete_car.php?car_id=<?= $post['car_id']?>">Удалить</a>
        <a href="update_car_form.php?car_id=<?= $post['car_id']?>" style="margin-left: 5px;">Редакитровать</a>
    </div>
<? endforeach; ?>
<div style="display: grid;">
    <a href="index.html" style="margin-top: 10px;">
        <button style="width: 100px;">Назад</button>
    </a>
    <a href="car_form.html" style="margin-top: 10px;">
        <button style="width: 100px;">Добавить</button>
    </a>
</div>
</body>
