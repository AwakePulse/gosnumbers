<?php

    require "../web/db/db.php";

    session_start();

    $getParameters = mb_strtolower($_REQUEST['search']);
    
    function getSearch() {
        global $dbconn;
        global $getParameters;
        $query_search = pg_query($dbconn, "SELECT * FROM guvernmentnum WHERE additional_information LIKE '%$getParameters%' ORDER BY id ASC");
        $search = pg_fetch_all($query_search);
        return $search;
        // if (mb_strlen($getParameters) == 1) {
        //     $query_search = pg_query($dbconn, "SELECT * FROM guvernmentnum WHERE first_series = '$getParameters' ORDER BY id ASC");
        //     $search = pg_fetch_all($query_search);
        //     return $search;
        // } elseif (mb_strlen($getParameters) == 2) {
        //     $query_search = pg_query($dbconn, "SELECT * FROM guvernmentnum WHERE second_series = '$getParameters' ORDER BY id ASC");
        //     $search = pg_fetch_all($query_search);
        //     return $search;
        // } elseif (mb_strlen($getParameters) == 3) {
        //     $query_search = pg_query($dbconn, "SELECT * FROM guvernmentnum WHERE registration_number = '$getParameters' ORDER BY id ASC");
        //     $search = pg_fetch_all($query_search);
        //     return $search;
        // } elseif (mb_strlen($getParameters) > 3) {
        //     $query_search = pg_query($dbconn, "SELECT * FROM guvernmentnum WHERE additional_information = '$getParameters' ORDER BY id ASC");
        //     $search = pg_fetch_all($query_search);
        //     return $search;
        // } else {
        //     $search = 'Параметр не найден!';
        //     return false;
        // }
    }

    $search = getSearch();
    if ($search == false) {
        header("Location: error.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск</title>
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
                foreach($search as $src): ?>
                <a href="number.php?id=<?php echo $src["id"]?>"  class="div__number">
                    <img src="/img/number.png" alt="Номер" style="width: 120px; height: 50px" class="img__number">
                    <span class="description__number">
                        <? echo $src["first_series"] . str_pad($src["registration_number"], 3, '0', STR_PAD_LEFT) . 
                        $src["second_series"] . '|' . $src["region_code"];?>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</body>
<script src="/web/js/search.js"></script>
</html>