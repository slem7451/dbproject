<head>
    <meta charset="UTF-8">
    <title>Редактировать время смены</title>
</head>
<body>
<?php
$time_id = $_GET['time_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `shift_time` WHERE `time_id`='$time_id'")->fetch_assoc();
$mysql->close(); ?>
<form method="post" action="update_shift_time.php?time_id=<?= $time_id ?>">
    <input type="text" placeholder="Time in" name="time_in" value="<?= $res['time_in']?>">
    <input type="text" placeholder="Time out" name="time_out" value="<?= $res['time_out']?>">
    <a href="update_post.php?time_id=<?= $time_id?>">
        <button>Редакитровать</button>
    </a>
</form>
<a href="shift_time.php">
    <button>Назад</button>
</a>
</body>
