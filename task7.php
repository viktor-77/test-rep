<!--Сделайте форму с инпутом и флажком. С помощью инпута спросите у пользователя имя. После отправки формы, если флажок был отмечен, поприветствуйте пользователя, а если не был отмечен - попрощайтесь.-->
<form action="" method="GET">
    <input type="checkbox" name="flag">
    <label> ведіть ім'я
        <input name="name">
    </label>
    <input type="submit">
</form>

<?php
if (!empty($_GET) and isset($_GET['name']) ) {
    if (isset($_GET['flag'])) echo 'Hi ' . $_GET['name'];
    else echo 'Bey ' . $_GET['name'];
}
