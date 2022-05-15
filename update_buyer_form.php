<head>
    <meta charset="UTF-8">
    <title>Редактировать покупателя</title>
</head>
<body>
<?php
$buyer_id = $_GET['buyer_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `buyers` WHERE `buyer_id`='$buyer_id'")->fetch_assoc();
$mysql->close(); ?>
<form method="post" action="update_buyer.php?buyer_id=<?= $buyer_id ?>">
    <input type="text" placeholder="Name" name="name" value="<?= $res['name']?>">
    <input type="text" placeholder="Surname" name="surname" value="<?= $res['surname']?>">
    <input type="text" placeholder="Adress" name="adress" value="<?= $res['adress']?>">
    <input type="text" placeholder="Passport" name="passport" value="<?= $res['passport']?>">
    <a href="update_buyer.php?buyer_id=<?= $buyer_id?>">
        <button>Редакитровать</button>
    </a>
</form>
<a href="buyers.php">
    <button>Назад</button>
</a>
</body>
