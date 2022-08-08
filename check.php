<?php
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if(trim($email) == ''){
        $error = 'Enter your Email';
    }else if(trim($message) == ''){
        $error = 'Enter your Message';
    }else if(strlen($message) < 10){
        $error = 'Message must have more than 10 characters';
    }

    if($error != ''){
        echo $error;
        exit;
    }

    $subject = "=?utf-8?B?".base64_encode("test message")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

    mail('gohar-a@mail.ru', $subject, $message, $headers);

    header('Location: /about.php');
?>