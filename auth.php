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
    <label> password
        <input type="password" name="password"
               value="<?php if (!empty($_POST['password'])) {
                   echo $_POST['password'];
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

if (!empty($_POST)) {
    session_start();

    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $user_name = null;

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

    function is_email_correct($link): bool
    {
        $query = 'SELECT email FROM users';
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        for ($user_emails = []; $row = mysqli_fetch_assoc($result); $user_emails[] = $row) ;
        $flag = false;
        foreach ($user_emails as $user_email) {
            if ($user_email['email'] === $_POST['email']) {
                $flag = true;
                break;
            }
        }
        return $flag;
    }

    function is_password_correct($link): bool
    {
        $query = 'SELECT password FROM users';
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        for ($user_passwords = []; $row = mysqli_fetch_assoc($result); $user_passwords[] = $row) ;
        $flag = false;
        foreach ($user_passwords as $user_password) {
            if (password_verify($_POST['password'], $user_password['password'])) {
                $flag = true;
                break;
            }
        }
        return $flag;
    }

    function search_name($link,$user_email):string
    {
        $query = "SELECT name FROM users where email='".$user_email."'" ;
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        return mysqli_fetch_assoc($result)['name'];
    }

    $validation_result = (email_validation($user_email) and password_validation($user_password)
        and is_email_correct($link) and is_password_correct($link));

    if ($validation_result) {
        $_SESSION['auth'] = true;
        $_SESSION['name'] = search_name($link,$user_email);
        header("Location: user-page.php");
    } else {
        echo "!!!auth error!!!";
    }
}








