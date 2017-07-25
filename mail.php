<?php
// need to download the PHPMailer
require("class.phpmailer.php");

$mail = new PHPMailer():

// Set mailer to user SMTP
$mail->IsSMTP();
// Specify main and backup server
$mail->Host = "smtp.example.com;smtp2.example.com";
// Turn on SMTP authentication
$mail->SMTPAuth = true;
// SMTP username
$mail->Username = "petermac";
// SMTP password
$mail->Password = "secret";

$mail->From = "from@example.com";
$mail->FromName = "Mailer";

// name is optional
$mail->AddAddress("josh@example.net", "Josh Adams");
$mail->AddAddress("ellen@example.com");

// Set word wrap to 50 characters
$mail->WordWrap = 50;
// add attachment
$mail->AddAttachment("/var/tmp/file.tar.gz");
// optional attachment file name
$mail->AddAttachment("/tmp/image.jpg", "new.jpg");
// set email format to HTML
$mail->IsHTML(true);
$mail->Subject = "Here is the subject";
$mail->Body = "This is the HTML message
  body <b>in bold!</b>";
$mail->AltBody = "This is the body in plain text for
// non-HTML mail clients";

if(!$mail->Send()){
  echo "Message could not be sent. <p>";
  echo "Mailer Error: " . $mail->ErrorInfo;
}
else
  echo "Message has been sent";
?>
