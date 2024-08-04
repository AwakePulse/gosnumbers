<?php 
    require "../controller/myController.php";

    session_start();

    $_SESSION['user'];

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
    <title>Добавление</title>
    <link rel="stylesheet" href="/web/css/mainstyle.css">
    <link rel="icon" href="/img/favicon.ico" type=”image/x-icon”>
</head>
<body>
    <? require "footnotes/header.php";?>
    <? require "footnotes/searchline.php";?>
    <div class="main__window">
        <h3>Добавление номера</h3>
        <p></p>
        <div class="window__body">
            <form action="preview.php" method="post" class="addnum__form">
                <label>Серия</label>
                <input type="text" name="left_series" class="left__series" id="left_series" maxlength="1" placeholder="Первая буква серии" autocomplete="off" required>
                <span class="check__mark__one" id="check_mark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                    </svg>
                </span>
                <label>Номер</label>
                <input type="text" name="main_number" class="main__number" id="main_number" maxlength="3" placeholder="3 Цифры серии" autocomplete="off" required>
                <span class="check__mark__two" id="check_mark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                    </svg>
                </span>
                <label>Серия</label>
                <input type="text" name="right_series" class="right__series" id="right_series" maxlength="2" placeholder="Последние 2 буквы серии" autocomplete="off" required>
                <span class="check__mark__three" id="check_mark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                    </svg>
                </span>
                <label>Код региона</label>
                <input type="text" name="region" class="region" id="region" maxlength="3" placeholder="Ваш регион-код" autocomplete="off" required>
                <span class="check__mark__four" id="check_mark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                    </svg>
                </span>
                <button type="submit" class="submit__but" id="sub_but" disabled>Превью</button>
            </form>
        </div>
    </div>
</body>
<script src="/web/js/addnum.js"></script>
<script src="/web/js/search.js"></script>
<script src="/web/js/activeurl.js"></script>
</html>