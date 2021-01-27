app.controller('ctrlPA',function($scope,$http){
	$scope.staname=true;
	$scope.stalname = true;
	$scope.staposit = true;
	$scope.stasect = true;
	$scope.staaddr = true;
	$scope.statel = true;
	$scope.stafax = true;
	$scope.stamail = true;
	$scope.btnSendData = function(){
		if($scope.name == undefined || $scope.name == ''){
			$scope.staname=false;
		}else{
			$scope.staname=true;
		} 
		if($scope.lname == undefined || $scope.lname == ''){
			$scope.stalname=false;
		}else{
			$scope.stalname=true;
		} 
		if($scope.posit == undefined || $scope.posit == ''){
			$scope.staposit=false;
		}else{
			$scope.staposit=true;
		} 
		if($scope.sect == undefined || $scope.sect == ''){
			$scope.stasect=false;
		}else{
			$scope.stasect=true;
		} 
		if($scope.addr == undefined || $scope.addr == ''){
			$scope.staaddr=false;
		}else{
			$scope.staaddr=true;
		} 
		if($scope.tel == undefined || $scope.tel == ''){
			$scope.statel=false;
		}else{
			$scope.statel=true;
		} 
		if($scope.fax == undefined || $scope.fax == ''){
			$scope.stafax=false;
		}else{
			$scope.stafax=true;
		} 
		if($scope.mail == undefined || $scope.mail == ''){
			$scope.stamail=false;
		}else{
			$scope.stamail=true;
		}
		if($scope.name !== undefined&&$scope.lname !== undefined&&$scope.posit !== undefined&&$scope.sect !== undefined&&$scope.addr !== undefined&&$scope.tel !== undefined&&$scope.fax !== undefined&&$scope.mail !== undefined){
			if($scope.name !== ''&&$scope.lname !== ''&&$scope.posit !== ''&&$scope.sect !== ''&&$scope.addr !== ''&&$scope.tel !== ''&&$scope.fax !== ''&&$scope.mail !== ''){
				$http.post('../../php/insertSubAcad.php',{
					'name':$scope.name,
					'lname':$scope.lname,
					'posit':$scope.posit,
					'sect':$scope.sect,
					'addr':$scope.addr,
					'tel':$scope.tel,
					'fax':$scope.fax,
					'mail':$scope.mail,
				}).then(function(data){
					if(data.data==1){
						alert('ลงทะเบียนเรียบร้อย<br> ระบบจะทำการส่ง e-mail โดยอัตโนมัติเมื่อมีการทะเบียนสำเร็จ');
						location.reload();
					}
				});
			}
		}

	}
});