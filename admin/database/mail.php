<?php
//Created by Mewan Suriyaarachchi On 10/4/2017 @ 11:36 AM
$to = $_GET['to'];
$subject = $_POST['subject'];
$from = $_POST['kalhara.eyes.lk@gmail.com'];

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
$message='Sender Name: '.$_POST['name'].'<br><br>'.$_POST['message'];
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
header("location:../dashboard.php");
echo "<script>location='../dashboard.php'</script>";