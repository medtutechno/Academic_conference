<?php
	require "../../php/connect.php";
	$con = connect('localhost','medtuorg','tmt@33*2562','medtuorg_Academic','utf8');
	$objData = fopen('inData.csv','r');
	
	
	while (($objArr = fgetcsv($objData, 1000, ",")) !== FALSE) {
		$reg=array(
			'reg_name'=>$objArr[1],
			'reg_lastname'=>$objArr[0],
			'type_reg_idtype_reg'=>$objArr[3],
			'workplace'=>$objArr[4],
			'tel'=>$objArr[5],
			'food_idfood'=>$objArr[6],
			'academic_idacademic'=>'1',
			'email'=>$objArr[8],
			'pre_fix_prefix_id'=>$objArr[9],
			'number_cert'=>$objArr[10]
		);
		insert('register',$reg);
		
		$sql='SELECT max(regis_id) FROM register';
		$result = query($sql);
		echo $id = mysqli_num_rows($result);
		$objDateRegis = fopen('dateregistv.csv','r');
		while (($objDate = fgetcsv($objDateRegis, 1000, ",")) !== FALSE) {			
		    //echo $objArr[0].'='.$objDate[1].'<br>';
			if($objDate[1]==$objArr[0]){
				echo $objArr[0].'='.$objDate[1].'<br>';
				$dateregis=array(
					'dateregiscol'=>$objDate[0],
					'register_regis_id'=>$id
				);
				break;
			}
		}
		//insert('dateregis',$dateregis);
		fclose($objDateRegis);

		$objLis = fopen('inDatalis.csv','r');
		while (($objList = fgetcsv($objLis, 1000, ",")) !== FALSE) {
			if($objList[0]==$objArr[0]){
				$list=array(
					'register_regis_id'=>$id,
					'session_idsession'=>$objList[1]
				);
			}

		}
		
		insert('session_listen',$list);
		fclose($objLis);
	}
fclose($objData);


echo 'Open DB';
?>