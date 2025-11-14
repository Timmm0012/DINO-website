<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$env = parse_ini_file(__DIR__ . '/../.env');

var_dump($env);

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $env['email'];
    $mail->Password   = $env['password'];
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom($_POST['email'], $_POST['firstname']);
    $mail->addAddress('timklaassen1612@gmail.com');

    $mail->Subject = "Nieuw bericht van " . $_POST['firstname'] . " " . $_POST['lastname'];
    $mail->Body    = $_POST['message'];

    $mail->send();
    header("Location: ../html/mailer/success.html");
    exit;
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}