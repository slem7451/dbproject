<head>
    <meta charset="UTF-8">
    <title>Машины в салоне</title>
</head>
<body>
<?php
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("select car_sale_id, name, model, price, color, fuel_type, body, engine_capacity, release_date 
from car_sales join cars on car_sales.car_id = cars.car_id join categories on categories.category_id = cars.category_id join car_names on car_names.name_id = cars.name_id
where car_sale_id not in (select car_sale_id from sales)");
$posts = array();
while ($row = $res->fetch_assoc())
    $posts[] = $row;
array_multisort($posts);
foreach ($posts as $post):
    ?>
    <div style="border-top-style: solid; border-bottom-style: solid; border-width: 1px;">
        <p>Car sale ID: <?= $post['car_sale_id'] ?></p>
        <p>Name: <?= $post['name'] ?></p>
        <p>Model: <?= $post['model'] ?></p>
        <p>Price: <?= $post['price'] ?></p>
        <p>Color: <?= $post['color'] ?></p>
        <p>Fuel type: <?= $post['fuel_type'] ?></p>
        <p>Body: <?= $post['body'] ?></p>
        <p>Engine capacity: <?= $post['engine_capacity'] ?></p>
        <p>Release date: <?= $post['release_date'] ?></p>
    </div>
<? endforeach; ?>
<div style="display: grid;">
    <a href="index.html" style="margin-top: 10px;">
        <button style="width: 100px;">Назад</button>
    </a>
</div>
</body>