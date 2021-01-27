app.controller('exportToxls',function(Excel,$timeout,$scope){
	function exxls(tableId){ // ex: '#my-table'
        var exportHref=Excel.tableToExcel(tableId,'WireWorkbenchDataExport');
        $timeout(function(){location.href=exportHref;},100); // trigger download
    }
	$scope.btnSignin = function(){
		$http.get('exportToxls.php').then(function(data){
			console.log(data);
		});

	}
});