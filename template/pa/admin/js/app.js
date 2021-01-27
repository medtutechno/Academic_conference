var app=angular.module('app',['ngRoute']);
app.config(function($routeProvider,$locationProvider){
	$routeProvider
	.when('/',{
		templateUrl:'login.php',
		//controller:'ctrlPA'
	})
	.otherwise({redirectTo: '/'});
	$locationProvider.hashPrefix('');
});