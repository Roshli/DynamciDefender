<?php
require "phpmailer/PHPMailerAutoload.php";
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "dynamicdefender001@gmail.com";
$mail->Password = "Dynamic@1234";
$mail->SetFrom("dynamicdefender001@gmail.com");
$mail->Subject = "Treat Alert!!!";
$mail->Body = "You are under an attack log to Dynamic defender for more dertails.";
$mail->AddAddress("roshliperera@gmail.com");

if(!$mail->Send()) {
    echo "<script>
alert('Sent unsuccessful');
window.location.href='Trigger.php';
</script>";
} else {
    echo "<script>
alert('Sent Successful');
window.location.href='Trigger.php';
</script>";
}
?>