<head>
    <meta charset="UTF-8">
    <title>Car_sales</title>
</head>
<body>
<?php
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `car_sales`");
$posts = array();
while ($row = $res->fetch_assoc())
    $posts[] = $row;
array_multisort($posts);
foreach ($posts as $post):
    ?>
    <div style="border-top-style: solid; border-bottom-style: solid; border-width: 1px;">
        <p>Car sale ID: <?= $post['car_sale_id'] ?></p>
        <p>Car ID: <?= $post['car_id'] ?></p>
        <a href="delete_car_sale.php?car_sale_id=<?= $post['car_sale_id']?>">Удалить</a>
        <a href="update_car_sale_form.php?car_sale_id=<?= $post['car_sale_id']?>" style="margin-left: 5px;">Редакитровать</a>
    </div>
<? endforeach; ?>
<div style="display: grid;">
    <a href="index.html" style="margin-top: 10px;">
        <button style="width: 100px;">Назад</button>
    </a>
    <a href="car_sale_form.html" style="margin-top: 10px;">
        <button style="width: 100px;">Добавить</button>
    </a>
</div>
</body>
