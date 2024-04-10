<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";
require "PHPMailer/src/Exception.php";
// fdhjuaymodijfsks 
$user_email = $_POST["name"];
 
// Создаем письмо
$mail = new PHPMailer();
// $mail->isSMTP();                   // Отправка через SMTP
$mail->Host   = "smtp.mail.ru";  // Адрес SMTP сервера
$mail->SMTPAuth   = true;          // Enable SMTP authentication
$mail->Username   = "senerks@mail.com";       // ваше имя пользователя (без домена и @)
$mail->Password   = "SenyaAleks22331";    // ваш пароль
$mail->SMTPSecure = "ssl";         // шифрование ssl
$mail->Port   = 465;  

$mail->setFrom("acor.nutrion", "Acor Nutrion");    // от кого
$mail->addAddress($user_email, "Клиент"); // кому
 
$mail->Subject = "Тест";
$mail->msgHTML("<html><body>
                <h1>Здравствуйте!</h1>
                <p>Это тестовое письмо.</p>
                </html></body>");
// Отправляем
if ($mail->send()) {
  echo "Письмо отправлено!";
} else {
  echo "Ошибка: " . $mail->ErrorInfo;
}