<?php
$json = json_decode( file_get_contents('php://input') );
$email = $json->email;
$datapname = $json->datapname;
$strSubject = "มีข้อร้องเรียนหรือข้อเสนอแนะ";
$strHeader = "Content-type: text/html; charset=UTF-8\r\n";
$strHeader .= "From: ระบบส่งข้อร้องเรียน\r\n";
$strMessage = "มีข้อร้องเรียน เรื่อง $datapname ส่งเข้ามา กรุณาตรวจสอบ<br>http://203.131.209.137/main/";
/*$sendmail = @mail($email,$strSubject,$strMessage,$strHeader);
if($sendmail){
	echo "email send";
}else{
	echo "not send";
}*/
@mail('techno.softwaredev@gmail.com',$strSubject,$strMessage,$strHeader);
?>