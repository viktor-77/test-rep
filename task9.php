<!--С помощью двух переключателей спросите у пользователя его пол. Выведите результат на экран.-->
<form action="" method="GET">
    <label>male
        <input type="hidden" value="0">
        <input type="radio" name="radio" value="male"
            <?php if($_GET['radio'] == 'male')echo 'checked'?> >
    </label>
    <label>
        <input type="hidden" value="0">
        <input type="radio" name="radio" value="female"
        <?php if($_GET['radio'] == 'female')echo 'checked'?>
    </label>female
    <input type="submit">
</form>
<?php
if (!empty($_GET)) echo '<br>'.$_GET['radio'];