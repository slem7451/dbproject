<head>
    <meta charset="UTF-8">
    <title>Редактировать смену</title>
</head>
<body>
<?php
$shift_id = $_GET['shift_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `shifts` WHERE `shift_id`='$shift_id'")->fetch_assoc();
$mysql->close(); ?>
<form method="post" action="update_shift.php?shift_id=<?= $shift_id ?>">
    <input type="text" placeholder="Employee id" name="employee_id" value="<?= $res['employee_id']?>">
    <input type="text" placeholder="Time id" name="time_id" value="<?= $res['time_id']?>">
    <a href="update_shift.php?shift_id=<?= $shift_id?>">
        <button>Редакитровать</button>
    </a>
</form>
<a href="shifts.php">
    <button>Назад</button>
</a>
</body>
