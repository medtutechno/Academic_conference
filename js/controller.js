app.controller('getData',function($scope,$http){

	$scope.sel_prefix = '1';
	$scope.sel_food = '1';
	$scope.sel_type = '1';
	$scope.selSession =[];

	$http.post('php/getData.php',{'select':'prefix'})
	.then(function(data){
		$scope.dataPrefix = data.data;
	});

	$http.post('php/getData.php',{'select':'type_reg'})
	.then(function(data){

		$scope.typeReg = data.data;

	});  

	/*$http.post('php/getData.php',{'select':'food'})

	.then(function(data){

		$scope.dataFood = data.data;

	});

	$http.post('php/getData.php',{'select':'sessionAcad'})

	.then(function(data){

		$scope.dataSession = data.data;

	});*/

	

	$scope.btnReg = function(){
		var sendSession = [];
		if($scope.name ==='' || $scope.name === undefined){
			document.getElementById("name").focus();
		}else if($scope.lastname ==='' || $scope.lastname === undefined){
			document.getElementById("lastname").focus();
		}else if($scope.mail ==='' || $scope.mail === undefined){
			document.getElementById("mail").focus();
		}else if($scope.tel ==='' || $scope.tel === undefined){
			document.getElementById("tel").focus();
		}   
		$http.post('php/getDatachk.php',{
			'name':$scope.name,
			'lname':$scope.lastname
		}).then(function(data){
			console.log(data);
			if(data.data > 0){
				alert('ท่านได้เคยลงทะเบียนเรียบร้อยแล้ว');
				location.reload();
			}else{
				$http.post('php/insertData.php',{
					'prefix':$scope.sel_prefix,
					'name':$scope.name,
					'lastname':$scope.lastname,
					'number':$scope.numberCerf,
					'mail':$scope.mail,
					'type':$scope.sel_type,
					'place':$scope.place,
					'food':$scope.sel_food,
					'tel':$scope.tel,
					'sendSession':$scope.selSession,
				}).then(function(data){
					console.log(data);
					if(data.data===1){
						alert('ท่านลงทะเบียนเรียบร้อยแล้ว กรุณาเช็ค E-mail การตรวจสอบการลงทะเบียนใน inbox หรือ junk mail');
						location.reload();
					}
				});
			}
		});
    	    

	}  

	

    $scope.addPre=true;

	$scope.addPrefix = function(){

		if($scope.sel_prefix==='0'){

			$scope.addPre=false;

		}

	};

	

});



app.controller('CheckUser',function($scope,$http){

	$scope.emptyName=true;//โชว์คำเตือนไม่ได้กรอกชื่อ

	$scope.emptyLname = true;//โชว์คำเตือนไม่ได้กรอกชื่อ

	$scope.nodata = true;//โชว์คำเตือนไม่มีข้อมูล

	$scope.selSession = [];

	$http.post('php/getData.php',{'select':'sessionAcad'})

	.then(function(data){

		$scope.dataSession = data.data;



	});

	$scope.btnChk = function(){

		if($scope.name ==='' || $scope.name === undefined){

			$scope.emptyName = false;

		}else if($scope.lastname ==='' || $scope.lastname === undefined){

			$scope.emptyName = true;

			$scope.emptyLname = false;

		}else{

			$scope.emptyName = true;

			$scope.emptyLname = true;

			$http.post('php/chkuser.php',{

				'name':$scope.name,

				'lname':$scope.lastname,

				'sel':'regis'

			})

			.then(function(data){

				var id;

				$scope.RegisData = data.data;		

				angular.forEach($scope.RegisData,function(value,key){

					id = value.regis_id;

				});

				if(id === '' || id === undefined){

					$scope.nodata = false;

				}else{

					$scope.nodata = true;

					$http.post('php/chkuser.php',{

						'id':id,

						'sel':'listen'

					}).then(function(data){

						angular.forEach(data.data,function(value,key){

							console.log(value.session_idsession);

							$scope.selSession[value.session_idsession] = true;

						});

						console.log(data.data);

					});

				}

			});

	

		}





	}

});