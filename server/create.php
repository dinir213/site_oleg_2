<?php
require_once 'server/connect.php';

$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
else $ip = $remote;

$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

// $timeSpent_1 = $_POST['timeSpent'];
mysqli_query($connect, query: "INSERT INTO `inputs_on_lending`(`id`, `ip`, `domain`) VALUES (NULL,'$ip','$referer')");

mysqli_query($connect, query: "INSERT INTO `state`(`id`, `ip`, `domain`, `time`, `click`) VALUES (NULL, '$ip', 'pronhub.com', 'no-uknown', '0')");
?>