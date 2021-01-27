<?
	require "../../php/connect.php";
	$con = connect('localhost','root','medadmin','academic_conference','utf8');
	$data = json_decode(file_get_contents("php://input"));
?>