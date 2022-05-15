<head>
    <meta charset="UTF-8">
    <title>Редактировать сотрудника</title>
</head>
<body>
<?php
$employee_id = $_GET['employee_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `employers` WHERE `employee_id`='$employee_id'")->fetch_assoc();
$mysql->close(); ?>
<form method="post" action="update_employee.php?employee_id=<?= $employee_id ?>">
    <input type="text" placeholder="Post_id" name="post_id" value="<?= $res['post_id']?>">
    <input type="text" placeholder="Name" name="name" value="<?= $res['name']?>">
    <input type="text" placeholder="Surname" name="surname" value="<?= $res['surname']?>">
    <input type="text" placeholder="Salary" name="salary" value="<?= $res['salary']?>">
    <a href="update_employee.php?employee_id=<?= $employee_id?>">
        <button>Редакитровать</button>
    </a>
</form>
<a href="employers.php">
    <button>Назад</button>
</a>
</body>
