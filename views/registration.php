<?php
    session_start();

    if ($_SESSION['user']) {
        header('Location: main.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="/web/css/autorize.css">
    <link rel="icon" href="/img/favicon.ico" type=”image/x-icon”>
</head>
<body>
    <a href="main.php" class="arrow__back" id="arrow_back">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
        </svg>
    </a>
    <form action = "../controller/singup.php" method = "post" class = "form__autorize">
        <label>Фамилия</label>
        <input type="text" name = "second_name" placeholder="Ваша фамилия..." required>
        <label>Имя</label>
        <input type="text" name = "first_name" placeholder="Ваше имя..." required>
        <label>Почта</label>
        <input type="email" name = "email" placeholder="Ваша почта..." required>
        <label>Придумайте логин</label>
        <input type="text" name = "login" placeholder="Ваш будущий логин..." required>
        <label>Придумайте пароль</label>
        <input type="password" name = "password" placeholder="Ваш будущий пароль..." required>
        <label>Подтвердите пароль</label>
        <input type="password" name = "password_confirm" placeholder="Ещё раз пароль..." required>
        <button>Зарегистрироваться</button>
        <a href="autorize.php" class = "redir">->Авторизация!</a>
        <?php
        if ($_SESSION['error']) {
            echo '<p class = "error" id = "error">' . $_SESSION['error'] . '</p>';
        }
            unset($_SESSION['error']);
        ?>
    </form>
</body>
</html>