/* ------------------------ Config -------------------------- */
/*   Config scriptet sätter upp alla nödvändiga funktioner    */
/* ---------------------------------------------------------- */
var app = angular.module('app',['ngRoute']);

app.config(function($routeProvider){
	$routeProvider
		.when('/',{
			controller: 'MyController',
			templateUrl: 'views/view1.html'
		})		
		.when('/view2',{
			controller: 'MyController',
			templateUrl: 'views/view2.html'
		})
		.otherwise({redirectTo: '/'});
});
