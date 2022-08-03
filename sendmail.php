<?php
  use PHPMailer\PHPMailer\PHPmailer;
  use PHPMailer\PHPMailer\Exception;

  require 'phpmailer/src/PHPMailer.php';
  require 'phpmailer/src/Exception.php';

  $mail = new PHPMailer(true);
  $mail->CharSet = 'UTF-8';
  $mail->setLanguage('ru', 'phpmailer/language/');
  $mail->IsHTML(true);

  $mail->setFrom('Fractallane@yandex.ru', 'sinweb');
  $mail->addAddres('Fractallane@yandex.ru');
  $mail->Subject = 'Письмо с сайта син веб';

  $body = '<h1>Письмо с сайта син веб</h1>';
  
  if(trim(!empty($_POST['name']))){
    $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
  }
  if(trim(!empty($_POST['email']))){
    $body.='<p><strong>Имя:</strong> '.$_POST['email'].'</p>';
  }
  if(trim(!empty($_POST['message']))){
    $body.='<p><strong>Имя:</strong> '.$_POST['message'].'</p>';
  }

  $mail->Body = $body;

  if (!$mail->send()) {
    $message = 'Ошибка';
  } else {
    $message = 'Данные отправлены!';
  }

  $response = ['message' => $message];

  header('Content-type: application/json');
  echo json_encode($response);