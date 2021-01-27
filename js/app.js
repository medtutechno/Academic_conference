var app=angular.module('app',['ngRoute']);

app.config(function($routeProvider,$locationProvider){
	$routeProvider
	.when('/',{
		templateUrl:'template/home.php',
	})
	.when('/Register',{
		templateUrl:'template/regis.php',
		controller:'getData'
	})
	.when('/Schedule',{

		templateUrl:'template/Schedule.php',
		//controller:'getData'
	})
	.when('/Checklist',{
		templateUrl:'template/Checklist.php',
		controller: 'CheckUser'
	})
	.when('/Carpark',{
		templateUrl:'template/carpark.php',
		//controller:'getData'
	})
	.otherwise({redirectTo: '/'});
	$locationProvider.hashPrefix('');
});

app.directive('ngEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if (event.which === 13) {
                scope.$apply(function () {
                    scope.$eval(attrs.ngEnter);
                });

                event.preventDefault();
            }
        });
    };
});