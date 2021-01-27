	<?php
	require "../../php/connect.php";
$con = connect('localhost','root','medadmin','medtu_academic','utf8');
	$sql='SELECT max(regis_id) FROM register';
	$result = query($sql);
	while($res=$result->fetch_array()){
		$id = $res[0];
	}
	echo $id;
?>