<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "5crazynoobs@gmail.com";
$mail->Password   = "crazynoobs@123";
$mail->IsHTML(true);
$mail->AddAddress("mayank.tiwari9797@gmail.com", "Ansu");
$mail->SetFrom("5crazynoobs@gmail.com", "mayank");
$mail->Subject = "Booking";
$content = "<b>Thank You for Booking<br> Your Booking is confirmed</b>";
$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  
} else {
    echo "<script>
    window.location.href ='index.php';
    </script>";
?>