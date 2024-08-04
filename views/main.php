<?php 

require "../controller/myController.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="/web/css/mainstyle.css">
    <link rel="icon" href="/img/favicon.ico" type=”image/x-icon”>
</head>
<body>
    <? require "footnotes/header.php";?>
    <? require "footnotes/searchline.php";?>
    <div class="main__window">
        <h3>Регистрационные номера</h3>
        <p></p>
        <div class="window__body">
        <?php 
            $numbers = getNumbersAll();
            foreach($numbers as $number): ?>
            <a href="number.php?id=<?php echo $number["id"]?>"  class="div__number">
                <img src="/img/number.png" alt="Номер" style="width: 120px; height: 50px" class="img__number">
                <span class="description__number">
                    <? echo $number["first_series"] . str_pad($number["registration_number"], 3, '0', STR_PAD_LEFT) . 
                    $number["second_series"] . '|' . $number["region_code"];?>
                </span>
            </a>
        <?php endforeach; ?>
            
        </div>
    </div>
</body>
<script src="/web/js/search.js"></script>
<script src="/web/js/activeurl.js"></script>
</html>