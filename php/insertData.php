<?php
	date_default_timezone_set('Asia/Bangkok');
	require "../../php/connect.php";
	require 'PHPMailer/class.phpmailer.php';
	$con = connect('localhost','root','medadmin','academic','utf8');
	$data = json_decode(file_get_contents("php://input"));
	$prefix = $data->prefix;
	$name = $data->name; 
	$lastname = $data->lastname;
	$number = $data->number;
	$mail = $data->mail;
	$type = $data->type;
	$place = $data->place;
	//$food = $data->food;
	$tel = $data->tel;
	$header = $data->sendSession;
	$value=array(
		'reg_name'=>$name,
		'reg_lastname'=>$lastname,
		'type_reg_idtype_reg'=>$type,
		'workplace'=>$place,
		'tel'=>$tel,
		'food_idfood'=>$food,
		'academic_idacademic'=>'1',
		'email'=>$mail,
		'pre_fix_prefix_id'=>$prefix,
		'number_cert'=>$number
	);
	insert('register',$value);
	$sql='SELECT max(regis_id) FROM register';
	$result = query($sql);
	while($res=$result->fetch_array()){
		$id = $res[0];
	}
	$time = date("Y-m-d");
	$value=array(
		'dateregiscol'=>$time,
		'register_regis_id'=>$id
	);
	insert('dateregis',$value);
	//------------ Send Mail ---------------------------
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = 'techno.softwaredev@gmail.com';
	$mail->Password = 'dev@software';
	$mail->setFrom('techno.softwaredev@gmail.com','TechnoMEDTU'); //email from gmail
	$mail->addAddress($mail,$name.' '.$lastname);
	$mail->Subject ='ลงทะเบียนประชุมวิชาการ';
	$mail->AltBody ='ท่านได้ลงทะเบียนประชุมวิชาการสำเร็จแล้ว';
	if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message sent!";
	}
	/*foreach ($header as $key1 => $value1) {
		if($value1 == 1){
			$valInsert=array(
				'register_regis_id'=>$id,
				'session_idsession'=>$key1
			);
			insert('session_listen',$valInsert);
			$sql='SELECT session_bookking FROM sessionHaeder WHERE idsession="'.$key1.'"';
			$countBook = select($sql);
			foreach ($countBook as $key2 => $value2) {
				$book=$value2[session_bookking];

			}
			$book+=1;
			$table='sessionHaeder';
			$valUp = array('session_bookking'=>$book);
			$where='idsession="'.$key1.'"';
			update($table,$valUp,$where);
			
		}
	}*/
	echo 1;
	
?>