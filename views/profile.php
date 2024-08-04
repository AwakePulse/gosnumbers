<?php
    session_start();

    if(!$_SESSION['user']) {
        header('Location: autorize.php');
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
    <div class="profile__user">
        <img src="<?= $_SESSION['user']['avatar']?>" alt="ваш аватар" class="user__avatar" style="width: 250px; height: 250px">
        <span class="hello">Здравствуйте!</span>
        <?php 
            echo '<h4>' . $_SESSION['user']['second_name'] . ' ' . $_SESSION['user']['first_name'] . '</h4>';
        ?>
    </div>
    <div class="addit__key">
        <a href="#" class="addit">
            <img src="" alt="">
            
        </a>
    </div>
</body>
</html>

