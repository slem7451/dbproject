<head>
    <meta charset="UTF-8">
    <title>Posts</title>
</head>
<body>
<?php
$mysql = new mysqli('localhost', 'root', 'root', 'car_shop');
$res = $mysql->query("SELECT * FROM `posts`");
$posts = array();
while ($row = $res->fetch_assoc())
    $posts[] = $row;
array_multisort($posts);
foreach ($posts as $post):
?>
<div style="border-top-style: solid; border-bottom-style: solid; border-width: 1px;">
    <p>Post ID: <?= $post['post_id'] ?></p>
    <p>Name: <?= $post['name'] ?></p>
    <a href="delete_post.php?post_id=<?= $post['post_id']?>">Удалить</a>
    <a href="update_post_form.php?post_id=<?= $post['post_id']?>" style="margin-left: 5px;">Редакитровать</a>
</div>
<? endforeach; ?>
<div style="display: grid;">
    <a href="index.html" style="margin-top: 10px;">
        <button style="width: 100px;">Назад</button>
    </a>
    <a href="post_form.html" style="margin-top: 10px;">
        <button style="width: 100px;">Добавить</button>
    </a>
</div>
</body>
