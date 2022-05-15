<head>
    <meta charset="UTF-8">
    <title>Sales</title>
</head>
<body>
<?php
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `sales`");
$posts = array();
while ($row = $res->fetch_assoc())
    $posts[] = $row;
array_multisort($posts);
foreach ($posts as $post):
    ?>
    <div style="border-top-style: solid; border-bottom-style: solid; border-width: 1px;">
        <p>Sale ID: <?= $post['sale_id'] ?></p>
        <p>Car ID: <?= $post['car_id'] ?></p>
        <p>Employee ID: <?= $post['employee_id'] ?></p>
        <p>Buyer ID: <?= $post['buyer_id'] ?></p>
        <p>Date: <?= $post['date'] ?></p>
        <a href="delete_sale.php?sale_id=<?= $post['sale_id']?>">Удалить</a>
        <a href="update_sale_form.php?sale_id=<?= $post['sale_id']?>" style="margin-left: 5px;">Редакитровать</a>
    </div>
<? endforeach; ?>
<div style="display: grid;">
    <a href="index.html" style="margin-top: 10px;">
        <button style="width: 100px;">Назад</button>
    </a>
    <a href="sale_form.html" style="margin-top: 10px;">
        <button style="width: 100px;">Добавить</button>
    </a>
</div>
</body>
