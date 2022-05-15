<head>
    <meta charset="UTF-8">
    <title>Редактировать должность</title>
</head>
<body>
<?php
$post_id = $_GET['post_id'];
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `posts` WHERE `post_id`='$post_id'")->fetch_assoc();
$mysql->close(); ?>
<form method="post" action="update_post.php?post_id=<?= $post_id ?>">
    <input type="text" placeholder="Name" name="name" value="<?= $res['name']?>">
    <a href="update_post.php?post_id=<?= $post_id?>">
        <button>Редакитровать</button>
    </a>
</form>
<a href="posts.php">
    <button>Назад</button>
</a>
</body>
