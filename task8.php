<!--Сделайте три чекбокса, которые будут сохранять свое значение после отправки.-->
<form action="" method="GET">
    <input type="hidden" name="flag1" value="0">
    <input
            type="checkbox"
            name="flag1"
            value="1"
        <?php if (!empty($_GET['flag1'])) echo 'checked' ?>
    >
    <input type="hidden" name="flag2" value="0">
    <input
            type="checkbox"
            name="flag2"
            value="1"
        <?php if (!empty($_GET['flag2'])) echo 'checked' ?>
    >
    <input type="hidden" name="flag3" value="0">
    <input
            type="checkbox"
            name="flag3"
            value="1"
        <?php if (!empty($_GET['flag3'])) echo 'checked' ?>
    >
    <input type="submit">
</form>
<?php
if (!empty($_GET))print_r ($_GET);
