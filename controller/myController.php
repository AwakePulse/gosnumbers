<?php

require_once "D:\SOFT\OpenServer\domains\Gos-Nubmers\web\db\db.php";

function getNumbersAll() {
    global $dbconn;
    $query_numbers = pg_query($dbconn, "SELECT * FROM guvernmentnum ORDER BY id ASC");
    $numbers = pg_fetch_all($query_numbers);
    return $numbers;
}

function getOwnerId($id) {
    global $dbconn;
    $query_owners = pg_query($dbconn, "SELECT * FROM users WHERE id = $id");
    $owners = pg_fetch_all($query_owners);
    foreach($owners as $owner) {
        return $owner;
    }
}

function getNumberId($id) {
    global $dbconn;
    $query_numbers_id = pg_query($dbconn, "SELECT * FROM guvernmentnum WHERE id = $id");
    $numbers_id = pg_fetch_all($query_numbers_id);
    foreach($numbers_id as $number_id) {
        return $number_id;
    }
}

/*
function saveData() {
    session_start();

    $second_name = $_POST['second_name'];
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $pass = $_POST['password'];
    $pass_con = $_POST['password_confirm'];

    if ($pass === $pass_con) {
        //continue
    } else {
        $_SESSION['error'] = 'Пароли не совпадают!';
        header('Location: ../views/registration.php');
    }
} */