<!DOCTYPE html>
<html lang="en">

<head>

	ЗДЕСЬ КОД ТВОЕГО САЙТА

</head>

</html>

<?php

$token = "Токен бота";
$chat_id = 1234567; #здесь ID твоего аккаунта TG, или ID чата, куда хочешь присылать данные

$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$server_name = $_SERVER['SERVER_NAME'];
$query = @unserialize(file_get_contents('http://ip-api.com/php/' . $ip . '?lang=ru'));

$arr = array(
	date('Y-m-d H:i:s ') . ' - новый посетитель сайта: ' => $ip, 'Страна:' => $query['country'], 'Город:' => $query['city'], 'UserAgent:' => $user_agent, 'Сайт:' => $server_name
);

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

?>