<head>
    <meta charset="UTF-8">
    <title>Редактировать покупку</title>
</head>
<body>
<?php
$sale_id = $_GET['sale_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `sales` WHERE `sale_id`='$sale_id'")->fetch_assoc();
$mysql->close(); ?>
<form method="post" action="update_sale.php?sale_id=<?= $sale_id ?>">
    <input type="text" placeholder="Car id" name="car_id" value="<?= $res['car_id']?>">
    <input type="text" placeholder="Employee id" name="employee_id" value="<?= $res['employee_id']?>">
    <input type="text" placeholder="Buyer id" name="buyer_id" value="<?= $res['buyer_id']?>">
    <input type="text" placeholder="Date" name="date" value="<?= $res['date']?>">
    <a href="update_sale.php?sale_id=<?= $sale_id?>">
        <button>Редакитровать</button>
    </a>
</form>
<a href="sales.php">
    <button>Назад</button>
</a>
</body>
