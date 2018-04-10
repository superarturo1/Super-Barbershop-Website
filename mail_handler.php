<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'asachako@student.touro.edu';
$mail->Password = 'RedHugo45!';
$mail->setFrom('asachako@student.touro.edu');
$mail->addAddress('asachako@student.touro.edu');
$mail->addAddress('artur_sachakov@yahoo.com');
$mail->Subject = 'Form Submission';

if(isset($_POST['submit'])){
 		$name=$_POST['name'];
 		$email=$_POST['email'];
 		$phone=$_POST['phone'];
 		$msg=$_POST['msg'];}
 		
$mail->Body = "Name: ".$name."\n"."Phone: ".$phone."\n"."Email: ".$email."\n". "Wrote the following: "."\n\n".$msg;
$headers="From: ".$email;

//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "<h1>Sent Successfully!  Thank you, "." ".$name. ".  We will contact you shortly!</h1>";;
}
?>








