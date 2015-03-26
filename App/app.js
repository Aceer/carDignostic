/* ------------------------ Config -------------------------- */
/*   Config scriptet sätter upp alla nödvändiga funktioner    */
/* ---------------------------------------------------------- */
var app = angular.module('app',['ngRoute']);

app.config(function($routeProvider){
	$routeProvider
		.when('/',{
			controller: 'StartController',
			templateUrl: 'App/views/start.html'
		})		
		.otherwise({redirectTo: '/'});
});