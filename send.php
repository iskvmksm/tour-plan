<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
<<<<<<< HEAD
    $email = $_POST['email'];
if (isset($_POST['email'])) {

    // Формирование самого письма
    $title = "Новое обращение Best Tour Plan";
    $body = "
    <h2>Новое обращение</h2>
    <b>Email:</b><br>$email
    ";
    
    // Настройки PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {
        $mail->isSMTP();   
        $mail->CharSet = "UTF-8";
        $mail->SMTPAutoTLS = false;
        $mail->SMTPSecure = false;
        $mail->SMTPDebug = 3;
        $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};
    
        // Настройки вашей почты
        $mail->Host       = 's12.link-host.net'; // SMTP сервера вашей почты
        $mail->Username   = 'iskvmksm@isakov-maksim.ru'; // Логин на почте
        $mail->Password   = 'xtvf19960502'; // Пароль на почте
        $mail->Port       = 25;
        $mail->setFrom('iskvmksm@isakov-maksim.ru', 'Максим Исаков'); // Адрес самой почты и имя отправителя
    
        // Получатель письма
        $mail->addAddress('isakovmaksim777@gmail.com');
    
    
    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body; 
    
    // Проверяем отравленность сообщения
    if ($mail->send()) {
        $result = "success";
    } 
    else {
        $result = "error";
    }
    
    } catch (Exception $e) {
        $result = "error";
        $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
    }
    
    // Отображение результата
    // echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
    header('Location: thankyou.html'); 
}
else {
    // Переменные, которые отправляет пользователь
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Формирование самого письма
    $title = "Новое обращение Best Tour Plan";
    $body = "
    <h2>Новое обращение</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $phone<br><br>
    <b>Сообщение:</b><br>$message
    ";

    // Настройки PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {
        $mail->isSMTP();   
        $mail->CharSet = "UTF-8";
        $mail->SMTPAutoTLS = false;
        $mail->SMTPSecure = false;
        $mail->SMTPDebug = 3;
        $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

        // Настройки вашей почты
        $mail->Host       = 's12.link-host.net'; // SMTP сервера вашей почты
        $mail->Username   = 'iskvmksm@isakov-maksim.ru'; // Логин на почте
        $mail->Password   = 'xtvf19960502'; // Пароль на почте
        $mail->Port       = 25;
        $mail->setFrom('iskvmksm@isakov-maksim.ru', 'Максим Исаков'); // Адрес самой почты и имя отправителя

        // Получатель письма
        $mail->addAddress('isakovmaksim777@gmail.com');


    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body; 

    // Проверяем отравленность сообщения
    if ($mail->send()) {
        $result = "success";
    } 
    else {
        $result = "error";
    }

    } catch (Exception $e) {
        $result = "error";
        $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
    }

    // Отображение результата
    // echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
    header('Location: thankyou.html');
}

=======

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Формирование самого письма
$title = "Новое обращение Best Tour Plan";
$body = "
<h2>Новое обращение</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br><br>
<b>Сообщение:</b><br>$message
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'isakovmaksim777@gmail.com'; // Логин на почте
    $mail->Password   = 'xtvf19960502'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('isakovmaksim777@gmail.com', 'Maksim Isakov'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('isakovmaksim777@gmail.com');  


// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
header('Location: thankyou.html');
>>>>>>> 794bc9910d554fafbe9ac1cb53e274b2cb561733
