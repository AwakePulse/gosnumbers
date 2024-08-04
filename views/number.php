<?php 
    require "../controller/myController.php";
?>

<?php $number_id = getNumberId($_GET['id'])?>
<?php $owner = getOwnerId($number_id["owner_id"])?>

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
    <a href="main.php" class="arrow__back" id="arrow_back">
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
        <div class="number__left"><?php echo mb_strtoupper($number_id["first_series"])?></div>
        <div class="number__midle"><?php echo str_pad($number_id["registration_number"], 3, '0', STR_PAD_LEFT)?></div>
        <div class="number__middle__right"><?php echo mb_strtoupper($number_id["second_series"])?></div>
        <div class="vl"></div>
        <div class="number__right double__num" id="number_right"><?php echo $number_id["region_code"]?></div>
        <div class="number__lang"><?php echo mb_strtoupper($owner["citizenship"])?></div>
        <img src="/img/rus.jpg" alt="Russia" width="80" height="40" class="img__rus">
        <div class="right__dot">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
            </svg>
        </div>
    </div>
    <div class="popup__owner">
        <button class="popup__owner__but" id="popup_owner_id">Информация о владельце</button>
    </div>
    <div class="popup" id="popup_id">
        <div class="popup__body" id="popup_body">
            <div class="popup__content">
                <button class="popup__close" id="popup_close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-octagon" viewBox="0 0 16 16">
                    <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>
                <div class="popup__title" id="popup_title">Владелец</div>
                <div class="popup__form" id="popup_form">
                    <span class="owner__second__name">Фамилия: <?php echo $owner["second_name"]?></span>
                    <span class="owner__first__name">Имя: <?php echo $owner["first_name"]?></span>
                    <span class="owner__patronymic">Мыло: <?php echo $owner["email"]?></span>
                    <!-- <span class="owner__birthday">Дата Рождения: <?php echo date("d.m.Y", strtotime($owner["data_of_birth"]));?></span> -->
                    <span class="owner__citizenship">Национальность: <?php echo $owner["citizenship"]?></span>
                </div>
                <div class="owner__error">
                    <button class="owner__error__but" id="owner_error_but">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-diamond-fill" viewBox="0 0 16 16">
                        <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        Сообщить об ошибке
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-diamond-fill" viewBox="0 0 16 16">
                        <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/web/js/script.js"></script>
</html>