<?php 
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$txt = $_POST['user_txt'];

$message = "Клиент $name <br>с телефоном $phone <br>и почтой $email <br>написал(а) $txt";
$headers = 'From: Couch order <info@strekalova-d.ru>' . "\r\n" .
    'Reply-To: Sergey Strekalov <strekalova.d.m@gmail.com>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\nMIME-Version: 1.0\r\nContent-Type: text/plain;charset=utf-8";
if (!mail("strekalova.d.m@gmail.com", "Заявка с сайта", $message, $headers)){
  echo "Почта не отправлена";
}
echo header("Location: index.html");