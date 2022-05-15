<head>
    <meta charset="UTF-8">
    <title>Shift Time</title>
</head>
<body>
<?php
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `shift_time`");
$posts = array();
while ($row = $res->fetch_assoc())
    $posts[] = $row;
array_multisort($posts);
foreach ($posts as $post):
    ?>
    <div style="border-top-style: solid; border-bottom-style: solid; border-width: 1px;">
        <p>Time ID: <?= $post['time_id'] ?></p>
        <p>Time in: <?= $post['time_in'] ?></p>
        <p>Time out: <?= $post['time_out'] ?></p>
        <a href="delete_shift_time.php?time_id=<?= $post['time_id']?>">Удалить</a>
        <a href="update_shift_time_form.php?time_id=<?= $post['time_id']?>" style="margin-left: 5px;">Редакитровать</a>
    </div>
<? endforeach; ?>
<div style="display: grid;">
    <a href="index.html" style="margin-top: 10px;">
        <button style="width: 100px;">Назад</button>
    </a>
    <a href="shift_time_form.html" style="margin-top: 10px;">
        <button style="width: 100px;">Добавить</button>
    </a>
</div>
</body>
