<?php
//С помощью формы спросите имя пользователя. После отправки формы поприветствуйте пользователя по имени, а форму уберите.
if (empty($_GET)) {
    ?>
    <form action="" method="GET">
        <input name="name">
        <input name="surname">
        <input type="submit">
    </form>
    <?php
} else {
    echo 'Hello'.' '.$_GET['name'] .' '. $_GET['surname'];
}
?>