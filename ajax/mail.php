<?php
parse_str($_POST['form_data'], $form);
$full_name = $form['full_name'];
$email = $form['email'];
$phone = $form['phone'];
$sjubject = $form['sjubject'];
$message = $form['message'];

define('TO_EMAIL', 'monteiromatheus047@gmail.com');
define('SUBJECT', $sjubject);
define('FROM_EMAIL', $email);

$MESSAGE = 'Olá, <br/><br/>';
$MESSAGE .= 'Você recebeu uma mensagem: <br/><br/>';
$MESSAGE .= 'Nome : '.$full_name.'<br/>';
$MESSAGE .= 'Email : '.$email.'<br/>';
if(!empty($phone)):
    $MESSAGE .= 'Celular : '.$phone.'<br/>';
endif;

$MESSAGE .= 'Mensagem : <br/>'.$message.'<br/><br/>';
$MESSAGE .= 'Cumprimentos';

$HEADERS = "MIME-Version: 1.0" . "\r\n";
$HEADERS .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$HEADERS .= 'From: <'.FROM_EMAIL.'>' . "\r\n";

mail(TO_EMAIL, SUBJECT, $MESSAGE, $HEADERS);
echo 1;
exit();