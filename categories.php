<head>
    <meta charset="UTF-8">
    <title>Categories</title>
</head>
<body>
<?php
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `categories`");
$posts = array();
while ($row = $res->fetch_assoc())
    $posts[] = $row;
array_multisort($posts);
foreach ($posts as $post):
    ?>
    <div style="border-top-style: solid; border-bottom-style: solid; border-width: 1px;">
        <p>Category ID: <?= $post['category_id'] ?></p>
        <p>Fuel type: <?= $post['fuel_type'] ?></p>
        <p>Release date: <?= $post['release_date'] ?></p>
        <p>Body: <?= $post['body'] ?></p>
        <p>Engine capacity: <?= $post['engine_capacity'] ?></p>
        <a href="delete_category.php?category_id=<?= $post['category_id']?>">Удалить</a>
        <a href="update_category_form.php?category_id=<?= $post['category_id']?>" style="margin-left: 5px;">Редакитровать</a>
    </div>
<? endforeach; ?>
<div style="display: grid;">
    <a href="index.html" style="margin-top: 10px;">
        <button style="width: 100px;">Назад</button>
    </a>
    <a href="category_form.html" style="margin-top: 10px;">
        <button style="width: 100px;">Добавить</button>
    </a>
</div>
</body>
