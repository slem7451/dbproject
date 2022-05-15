<head>
    <meta charset="UTF-8">
    <title>Car_names</title>
</head>
<body>
<?php
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `car_names`");
$posts = array();
while ($row = $res->fetch_assoc())
    $posts[] = $row;
array_multisort($posts);
foreach ($posts as $post):
    ?>
    <div style="border-top-style: solid; border-bottom-style: solid; border-width: 1px;">
        <p>Name ID: <?= $post['name_id'] ?></p>
        <p>Name: <?= $post['name'] ?></p>
        <p>Model: <?= $post['model'] ?></p>
        <a href="delete_car_name.php?name_id=<?= $post['name_id']?>">Удалить</a>
        <a href="update_car_name_form.php?name_id=<?= $post['name_id']?>" style="margin-left: 5px;">Редакитровать</a>
    </div>
<? endforeach; ?>
<div style="display: grid;">
    <a href="index.html" style="margin-top: 10px;">
        <button style="width: 100px;">Назад</button>
    </a>
    <a href="car_name_form.html" style="margin-top: 10px;">
        <button style="width: 100px;">Добавить</button>
    </a>
</div>
</body>
