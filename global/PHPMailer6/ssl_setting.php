<?php
$mail->isSMTP();// Set mailer to use SMTP
$mail->Host = 'eml.ares.com.tw';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->SMTPAutoTLS = false;
$mail->CharSet  = "utf-8";
$mail->Username = 'aresweb';// SMTP username
$mail->Password = 'Ares20873360'; // SMTP password
$mail->SMTPSecure = 'ssl';// Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to
?>