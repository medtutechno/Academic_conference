<?php
	require "../../php/connect.php";
	$con = connect('www.medtu.org','medtuorg','tmt@33*2562','medtuorg_Academic','utf8');
	$data = json_decode(file_get_contents("php://input"));
	$name = $data->name;
	$lname = $data->lname;
	$sql ='SELECT regis_id FROM register WHERE reg_name ="'.$name.'" AND reg_lastname = "'.$lname.'"';
    $num = query($sql);
	$result = $num->num_rows;
	echo $result;
	/*$result = select($sql);
	echo json_encode($result);*/
?>