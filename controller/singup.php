<?php

require_once "../web/db/db.php";

session_start();

$second_name = $_POST['second_name'];
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$login = $_POST['login'];
$pass = $_POST['password'];
$pass_con = $_POST['password_confirm'];

if ($pass === $pass_con) {

    $pass = md5($pass);

    global $dbconn;
    $validate_login = pg_query($dbconn, "SELECT * FROM users WHERE login = '$login'");
    $loginIn = pg_fetch_assoc($validate_login);
    if (!$loginIn) {
        $validate_mail = pg_query($dbconn, "SELECT * FROM users WHERE email = '$email'");
        $mailIn = pg_fetch_assoc($validate_mail);
        if (!$mailIn) {
            $query_users = pg_query($dbconn, "INSERT INTO public.users (
                id, second_name, first_name, email, login, password, avatar, citizenship)
                VALUES 
                (DEFAULT, '$second_name', '$first_name', '$email', '$login', '$pass', DEFAULT, DEFAULT)");
                $_SESSION['success'] = 'Успешная регистрация!';
                header('Location: ../views/autorize.php');
        } else {
            $_SESSION['error'] = 'Такой email уже используется!';
            header('Location: ../views/registration.php');
        }
    } else {
        $_SESSION['error'] = 'Такой логин уже используется!';
        header('Location: ../views/registration.php');
    }
} else {
    $_SESSION['error'] = 'Пароли не совпадают!';
    header('Location: ../views/registration.php');
}