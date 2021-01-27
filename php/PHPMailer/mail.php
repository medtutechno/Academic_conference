<?php

### INCLUDE PHPMAILER เข้ามา ###
include ("class.phpmailer.php");

### FUNCTION SEND MAIL ####

function scriptdd_sendmail($to_name,$to_email,$from_name,$email_user_send,$email_pass_send,$subject,$body_html,$body_text) {

$mail = new PHPMailer();
$mail -> From     = $email_user_send;
$mail -> FromName = $from_name;

$mail -> AddAddress($to_email,$to_name);
$mail -> Subject = "=?UTF-8?B?".base64_encode($subject)."?=";
$mail -> Body		= $body_html;
$mail -> AltBody	= $body_text;
$mail -> IsHTML (true);

$mail->IsSMTP();
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPAuth		= true;
//$mail->SMTPDebug	= true;
$mail->Username = $email_user_send;
$mail->Password = $email_pass_send;

$mail->Send();
$mail->ClearAddresses();


}
### FUNCTION SEND MAIL ####
/*#### เวลาเรียกใช้เรียกเป็น Function แบบนี้ #####
$to_name			="ชื่อของปลายทาง";
$to_email			="email ปลายทาง";
$from_name			="ชื่อของคุณ";
$email_user_send	="Gmail ของคุณ";
$email_pass_send	="รหัสผ่านของ Gmail ของคุณ";
$subject			="หัวข้อ Email";
$body_html			="เนื้อหาเป็น HTML";
$body_text			="เนื้อหาเป็น Text ธรรมดา";

scriptdd_sendmail($to_name,$to_email,$from_name,$email_user_send,$email_pass_send,$subject,$body_html,$body_text);

echo "ส่งไปแล้ว";*/

?>
