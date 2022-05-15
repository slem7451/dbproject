<head>
    <meta charset="UTF-8">
    <title>Редактировать категорию</title>
</head>
<body>
<?php
$category_id = $_GET['category_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `categories` WHERE `category_id`='$category_id'")->fetch_assoc();
$mysql->close(); ?>
<form method="post" action="update_category.php?category_id=<?= $category_id ?>">
    <input type="text" placeholder="Fuel type" name="fuel_type" value="<?= $res['fuel_type']?>">
    <input type="text" placeholder="Release date" name="release_date" value="<?= $res['release_date']?>">
    <input type="text" placeholder="Body" name="body" value="<?= $res['body']?>">
    <input type="text" placeholder="Engine capacity" name="engine_capacity" value="<?= $res['engine_capacity']?>">
    <a href="update_category.php?category_id=<?= $category_id?>">
        <button>Редакитровать</button>
    </a>
</form>
<a href="categories.php">
    <button>Назад</button>
</a>
</body>
