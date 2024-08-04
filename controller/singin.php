<?php

require_once "../web/db/db.php";

session_start();

$login = $_POST['login'];
$pass = md5($_POST['password']);

global $dbconn;
$check_user = pg_query($dbconn, "SELECT * FROM users WHERE login = '$login' AND password = '$pass'");

if (pg_num_rows($check_user) > 0 ) {

    $user = pg_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user["id"],
        "second_name" => $user["second_name"],
        "first_name" => $user["first_name"],
        "avatar" => $user["avatar"]
    ]; 

    header('Location: ../views/main.php');

} else {
    $_SESSION['error'] = 'Неверный логин или пароль!';
    header('Location: ../views/autorize.php');
} 