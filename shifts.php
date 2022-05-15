<head>
    <meta charset="UTF-8">
    <title>Shifts</title>
</head>
<body>
<?php
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `shifts`");
$posts = array();
while ($row = $res->fetch_assoc())
    $posts[] = $row;
array_multisort($posts);
foreach ($posts as $post):
    ?>
    <div style="border-top-style: solid; border-bottom-style: solid; border-width: 1px;">
        <p>Shift ID: <?= $post['shift_id'] ?></p>
        <p>Employee ID: <?= $post['employee_id'] ?></p>
        <p>Time ID: <?= $post['time_id'] ?></p>
        <a href="delete_shift.php?shift_id=<?= $post['shift_id']?>">Удалить</a>
        <a href="update_shift_form.php?shift_id=<?= $post['shift_id']?>" style="margin-left: 5px;">Редакитровать</a>
    </div>
<? endforeach; ?>
<div style="display: grid;">
    <a href="index.html" style="margin-top: 10px;">
        <button style="width: 100px;">Назад</button>
    </a>
    <a href="shift_form.html" style="margin-top: 10px;">
        <button style="width: 100px;">Добавить</button>
    </a>
</div>
</body>
