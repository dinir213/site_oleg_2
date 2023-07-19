<?php
require_once 'server/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['timeSpent'])) {
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = @$_SERVER['REMOTE_ADDR'];
    if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
    elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
    else $ip = $remote;
    $timeSpent = $_POST['timeSpent'];
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

    // Здесь можно добавить код для сохранения времени пребывания в базе данных или логирования на сервере
    mysqli_query($connect, query: "INSERT INTO `state`(`id`, `ip`, `domain`, `time`, `click`) VALUES (NULL, '$ip', '$referer', '$timeSpent', '1')");

}
?>