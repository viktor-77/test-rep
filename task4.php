
<!--С помощью формы спросите город и страну пользователя. После отправки формы выведите введенные данные на экран. Сделайте так, чтобы введенные данные не пропадали из инпутов после отправки формы.-->
<form action="" method="GET">
    <input
        name="city"
        value="<?php if (isset($_GET['city'])) echo $_GET['city'] ?>"
    >
    <input
        name="country"
        value="<?php if (isset($_GET['country'])) echo $_GET['country'] ?>"
    >
    <input type="submit">
</form>
<?php if ( isset($_GET['city']) and isset($_GET['country'])) echo $_GET['city'] .' '.$_GET['country'] ?>