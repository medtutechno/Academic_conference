<?php
	require "../../php/connect.php";
	$con = connect('localhost','medtuorg','tmt@33*2562','medtuorg_sub_academic','utf8');
	$data = json_decode(file_get_contents("php://input"));
	$name = $data->name; 
	$lname = $data->lname;
	$mail = $data->mail;
	$sect = $data->sect;
	$tel = $data->tel;
	$posit = $data->posit;
	$fax = $data->fax;
	$addr = $data->addr;
	$regis = array(
		'name'=>$name,
		'lname'=>$lname,
		'section'=>$sect,
		'address'=>$addr,
		'tel'=>$tel,
		'fax'=>$fax,
		'mail'=>$mail
	);
	insert('register',$regis);
	$sql = 'SELECT idacademic FROM register';
	$result = query($sql);
	$id = mysqli_num_rows($result);
	$time = date("Y-m-d");
	$reserv = array(
		'register_idacademic'=>$id,
		'detail_academic_iddetail_academic'=>'1',
		'reserv_date'=>$time
	);
	insert('reserv',$reserv);
	$strSubject = "ลงทะเบียนสำเร็จ";
    $strHeader = "Content-type: text/html; charset=UTF-8\r\n";
    $strHeader .= "From: ระบบลงทะเบียนประชุม update cervical cancer screening guideline in Thailand\r\n";
    $strMessage = "ท่านได้ลงทะเบียนเรียบร้อยแล้ว";
/*$sendmail = @mail($email,$strSubject,$strMessage,$strHeader);
if($sendmail){
	echo "email send";
}else{
	echo "not send";
}*/
    @mail($mail,$strSubject,$strMessage,$strHeader);


	echo '1';
?>