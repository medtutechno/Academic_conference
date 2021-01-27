<?php
	require "../../php/connect.php";
	$con = connect('localhost','root','medadmin','medtu_academic','utf8');
	$data = json_decode(file_get_contents("php://input"));
	$sel = $data->sel;
	if($sel=='regis'){
		$name = $data->name;
		$lname = $data->lname;
		$sql = "SELECT reg.regis_id,reg.reg_name,reg.reg_lastname,type_reg.type_reg,food.food,reg.email,reg.tel,reg.number_cert,reg.workplace
			FROM register AS reg
			LEFT JOIN type_reg
			ON reg.type_reg_idtype_reg = type_reg.idtype_reg
			LEFT JOIN food
			ON reg.food_idfood = food.idfood
			WHERE reg.reg_name='".$name."' AND reg.reg_lastname='".$lname."'";

	}else if($sel=='listen'){
		$id = $data->id;
		$sql ="SELECT *
			FROM session_listen
			WHERE register_regis_id = '".$id."'";
			
	}
	$result = select($sql);
	echo json_encode($result);
?>