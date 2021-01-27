<?php
	require "../../php/connect.php";
	$con = connect('localhost','root','medadmin','academic','utf8');
	$data = json_decode(file_get_contents("php://input"));
	$select = $data->select;
	if($select === 'sessionAcad'){
		$sql= 'SELECT session,session_amonut,session_bookking FROM sessionHaeder';
	}else{
		$sql ='SELECT * FROM '.$select;
	}
	
	$result = select($sql);
	echo json_encode($result);
?>