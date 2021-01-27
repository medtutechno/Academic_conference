var app=angular.module('app',['ngRoute']);

app.config(function($routeProvider,$locationProvider){
	$routeProvider
	.when('/',{
		templateUrl:'regis.php',
		controller:'ctrlPA'
	})
	.when('/Register',{
		templateUrl:'template/regis.php',
		controller:'ctrlPA'
	})
	.when('/Schedule',{
		templateUrl:'template/Schedule.php',
		//controller:'getData'
	})
	.otherwise({redirectTo: '/'});
	$locationProvider.hashPrefix('');
});