<?php

session_start();

require_once "../web/db/db.php";

$data = $_POST['data'];

$left = mb_strtolower($data['numberLeft']);
$midle = $data['numberMidle'];
$right = mb_strtolower($data['numberRight']);
$region = $data['numberRegion'];
$addit_info = mb_strtolower($data['numberLeft']) . $data['numberMidle'] . mb_strtolower($data['numberRight']);

$id_owner = $_SESSION['user']['id'];

global $dbconn;
$validate_save = pg_query($dbconn, "INSERT INTO public.guvernmentnum (
    id, first_series, registration_number, second_series, region_code, additional_information, owner_id)
    VALUES 
    (DEFAULT, '$left', '$midle', '$right', '$region', '$addit_info', '$id_owner')"
);