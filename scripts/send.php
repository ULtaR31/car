<?php
$name     = $_POST['name'];
$phone    = $_POST['phone'];
$email    = $_POST['email'];
$message  = $_POST['message'];

$name     = htmlspecialchars($name);
$phone    = htmlspecialchars($phone);
$email    = htmlspecialchars($email);
$message  = htmlspecialchars($message);

$name     = urldecode($name);
$phone    = urldecode($phone);
$email    = urldecode($email);
$message  = urldecode($message);


$name     = trim($name);
$phone    = trim($phone);
$email    = trim($email);
$message  = trim($message);

mail("usov.lesha2017@gmail.com", "Заявка на дизайнера", "ФИО: ".$name." Телефон: ".$phone.". E-mail: ".$email." Сообщение от клиента: ".$message ,"From: zayavka@gmail.com \r\n");



if (mail("usov.lesha2017@gmail.com", "Заявка на дизайнера", "ФИО:".$name."Телефон".$phone.". E-mail: ".$email."Сообщение от клиента :".$message ,"From: zayavka@gmail.com \r\n"))

 {
    header('location: sendplus.html');
} else {
    header('location: sendminus.html');
}
?>