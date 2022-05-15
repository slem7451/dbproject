<head>
    <meta charset="UTF-8">
    <title>Buyers</title>
</head>
<body>
<?php
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `buyers`");
$posts = array();
while ($row = $res->fetch_assoc())
    $posts[] = $row;
array_multisort($posts);
foreach ($posts as $post):
    ?>
    <div style="border-top-style: solid; border-bottom-style: solid; border-width: 1px;">
        <p>Buyer ID: <?= $post['buyer_id'] ?></p>
        <p>Name: <?= $post['name'] ?></p>
        <p>Surname: <?= $post['surname'] ?></p>
        <p>Adress: <?= $post['adress'] ?></p>
        <p>Passport: <?= $post['passport'] ?></p>
        <a href="delete_buyer.php?buyer_id=<?= $post['buyer_id']?>">Удалить</a>
        <a href="update_buyer_form.php?buyer_id=<?= $post['buyer_id']?>" style="margin-left: 5px;">Редакитровать</a>
    </div>
<? endforeach; ?>
<div style="display: grid;">
    <a href="index.html" style="margin-top: 10px;">
        <button style="width: 100px;">Назад</button>
    </a>
    <a href="buyer_form.html" style="margin-top: 10px;">
        <button style="width: 100px;">Добавить</button>
    </a>
</div>
</body>
