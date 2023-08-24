<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

 //$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->Host = "mail.sefrel.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;

$mail->Username = "ridwan@sefrel.com";
$mail->Password = "Ridakid01@@";

$mail->setFrom($email, $name);
$mail->addAddress("developer@sefrel.com", "Ridwan");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "Email sent successfully!"; 


