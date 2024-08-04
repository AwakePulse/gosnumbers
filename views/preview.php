<?php

    // require '../controller/name';

    session_start();

    if(!$_SESSION['user']) {
        header('Location: autorize.php');
    }

    $left_series = $_POST['left_series'];
    $main_number = $_POST['main_number'];
    $right_series = $_POST['right_series'];
    $region = $_POST['region'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрационный номер</title>
    <link rel="stylesheet" href="/web/css/style.css">
    <link rel="icon" href="/img/favicon.ico" type=”image/x-icon”>
</head>
<body>
    <a href="addnum.php" class="arrow__back" id="arrow_back">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
        </svg>
    </a>
    <div class="number">
        <div class="left__dot">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
            </svg>
        </div>
        <div id="number_left" class="number__left"><?php echo mb_strtoupper($left_series)?></div>
        <div id="number_midle" class="number__midle"><?php echo str_pad($main_number, 3, '0', STR_PAD_LEFT)?></div>
        <div id="number_midle_right" class="number__middle__right"><?php echo mb_strtoupper($right_series)?></div>
        <div class="vl"></div>
        <div class="number__right double__num" id="number_right"><?php echo $region?></div>
        <div class="number__lang">RUS</div>
        <img src="/img/rus.jpg" alt="Russia" width="80" height="40" class="img__rus">
        <div class="right__dot">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
            </svg>
        </div>
    </div>
    <button id="save_but" class="save__date">Сохранить</button>
</body>
<script src="/web/js/script.js"></script>
<script src="/web/js/preview.js"></script>
<script src="/web/js/jquery.js"></script>
</html>