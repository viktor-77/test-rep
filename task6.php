<!--С помощью трех инпутов спросите у пользователя год, месяц и день. После отправки формы выведите на экран, сколько дней осталось от введенной даты до Нового Года. По заходу на страницу сделайте так, чтобы в инпутах стояла текущая дата.-->
<form action="" method="GET">
    <label> year
        <input name="year" value="
        <?= date('Y') ?>"></label>
    <label> month
        <input name="month" value="
        <?= date('m') ?>">
    </label>
    <label> day
        <input name="day" value="
        <?=  date('d') ?>">
    </label>

    <input type="submit">
</form>
<?php
if ( isset($_GET['year']) and isset($_GET['month']) and isset($_GET['day'])){
    if($_GET['month'] == 0) $_GET['month'] = 1;
    if($_GET['day'] == 0) $_GET['day'] = 1;

    $user_time = mktime(0,0,0, $_GET['month']-1, $_GET['day']-1, $_GET['year']);
    $new_year_time = mktime(0,0,0,0,0,$_GET['year']+1);

    $delay = $new_year_time - $user_time;
    echo 'до нового року залишилося'.$delay/60/60/24;
}
?>