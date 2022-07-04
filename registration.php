<meta charset="utf-8">
<form method="POST">
    <label>
        email
        <input type="text" name="email"
               value="<?php if (!empty($_POST['email'])) {
                   echo $_POST['email'];
               } ?>">
    </label>
    <br> <br>
    <label> name
        <input type="text" name="name"
               value="<?php if (!empty($_POST['name'])) {
                   echo $_POST['name'];
               } ?>">
    </label>
    <br> <br>
    <label> password
        <input type="password" name="password"
               value="<?php if (!empty($_POST['password'])) {
                   echo $_POST['password'];
               } ?>">
    </label>
    <br> <br>
    <label> repeat password
        <input type="password" name="password_repeat"
               value="<?php if (!empty($_POST['password_repeat'])) {
                   echo $_POST['password_repeat'];
               } ?>">
    </label>
    <br> <br>
    <input type="submit">
</form>

<?php
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'mydb';      // имя базы данных

if (!empty($_POST)){
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $user_name = $_POST['name'];

    $link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf8'");


    function email_validation(string $email): bool
    {
        return (bool)preg_match('#^[0-9a-z]{10,}@[0-9a-z]{1,10}\.[a-z]{2,4}$#', $email);
    }

    function password_validation(string $password): bool
    {
        return (bool)preg_match('#^(?=.*[\!\@\#\%\^\&\*])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z\!\@\#\%\^\&\*]{8,}$#', $password);
    }

    function password_equal_check(): bool
    {
        return $_POST['password'] === $_POST['password_repeat'];
    }

    function name_validation(string $name): bool
    {
        return (bool)preg_match('#^[0-9a-zA-Z]{5,}$#', $name);
    }

    function is_email_free($link): bool
    {
        $query = 'SELECT email FROM users';
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        for ($user_emails = []; $row = mysqli_fetch_assoc($result); $user_emails[] = $row) ;
        $flag = true;
        foreach ($user_emails as $user_email) {
            if ($user_email['email'] === $_POST['email']) {
                $flag = false;
                break;
            }
        }
        return $flag;
    }


    $validation_result = (email_validation($user_email)
        and password_validation($user_password) and name_validation($user_name)
        and is_email_free($link) and password_equal_check());

    if ($validation_result) {
        $user_password = password_hash($user_password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users SET email='$user_email', password='$user_password', name='$user_name'";
        mysqli_query($link, $query);
        header('Location: auth.php');

    } elseif (!is_email_free($link)) {
        echo "!!!this email was registered!!!";
    }elseif (!password_equal_check()) {
        echo "!!!passwords are not equal!!!";
    } else {
        echo "!!!registration error!!!";
    }
}







