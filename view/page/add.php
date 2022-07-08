<form method="post">
    <input name="title" placeholder="title">
    <input name="slug" placeholder="slug">
    <input name="content" placeholder="content">
    <input type="submit" placeholder="submit">
</form>
<?php
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$db_name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $db_name);
if (!empty($_POST)) {
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $content = $_POST['content'];
    $query = "INSERT INTO pages SET title=$title, slug=$slug, content=$content";
    mysqli_query($link, $query);
}

