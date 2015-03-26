<?php
	require "../../lessphp/lessc.inc.php";
	$less = new lessc;
?>
<!DOCTYPE html>
<html lang="en" data-ng-app="demoApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Car dignostic</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<style>
	<?php echo $less->compileFile("this-site.less"); ?>
	</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<nav class="navbar navbar-black navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
			</button>
			<a class="navbar-brand" href="#">Logo</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav nav-justified">
				<li class="active"><a href="#"><span class="glyphicon glyphicon-scale"></span> DASCHBORDS</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-stats"></span> PERFORMANCE</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-wrench"></span> DIGNOSTICS</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-cog"></span> VEHICLE</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-globe"></span> MAPS</a></li>
			</ul>
		</div>
	</div>
</nav>
	
	<div class="container">
	  
	  <div class="row">
	    <div class="col-lg-12">
		  <div class="panel panel-default">
		    <div class="panel-heading">Engine</div>
			<div class="panel-body">
			  <p>
			  Information om motorn mm...bla bla bla.<br>
			  Mer text och data.<br>
			  Text text.
			  </p>
			  <p><a class="btn btn-lg btn-success" href="#" role="button">Mer information</a></p>
			</div>
		  </div>
		</div>
	  </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
		  <div class="panel panel-default">
			<div class="panel-heading">AngularJS test</div>
			<div class="panel-body">
              <p>Skriv något för att testa angularJS<br>
			  <input type="text" data-ng-model="name"/> {{ name }}</p>
              <p><a class="btn btn-primary" href="#" role="button">Info &raquo;</a></p>
			</div>
         </div>
        </div>
        <div class="col-lg-4">
		  <div class="panel panel-default">
			<div class="panel-heading">Ett till AgularJs exempel</div>
			<!-- Placeholders for the wiew -->
			<div data-ng-view></div>
         </div>
        </div>
        <div class="col-lg-4">
		  <div class="panel panel-default">
			<div class="panel-heading">Panel heading</div>
			<div class="panel-body">
              <h2>Heading</h2>
              <p>Information ... Information ...</p>
              <p><a class="btn btn-primary" href="#" role="button">Info &raquo;</a></p>
		    </div>
         </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Company 2015</p>
      </footer>

    </div>
	
	<script src="../../../../angular.min.js"></script>
	<script src="../../../../angular-route.js"></script>
<!-- Länka till script controllern senare. Controllern hämtar datan och kan visas inom det område som man skriver ng-controller="MyController", view`en får det scopet -->
	<script>
		var demoApp = angular.module('demoApp',['ngRoute']);
		/* ------------------------ Config -------------------------- (Config scriptet sätter upp alla nödvändiga funktioner)*/
			demoApp.config(function($routeProvider, $locationProvider){
			$routeProvider
				.when('/',{
					templateUrl: 'views/view1.html',
					controller: 'MyController'
				})
				.when('/view2',{
					templateUrl: 'views/view2.html',
					controller: 'MyController'
				})
				.when('/view3',{
					templateUrl: 'views/view3.html',
				})
				.otherwise({redirectTo: '/'});
		});
		
		/* ----------------------- Factory -------------------------- (Factory används för att hämta data eller att updatera data åt controllers)*/
		demoApp.factory('MyFactory', function(){
			var factory = {},
				contries = [{name:'Sverige',city:'Stockholm'},{name:'Spanien',city:'Madrid'},{name:'Italien',city:'Rom'},{name:'Scotland',city:'Edingburg'},{name:'Vietnam',city:'Hanoi'}];

			factory.getCountries = function(){
				/* -- Här kan du använda AJAX istället -- */
				return contries;
			};

			return factory;
		});

		/* ----------------------- Controllers ----------------------- (Controllers anänds för att göra något med datan och sen kan en eller flera view komma åt datan)*/
		demoApp.controller('MyController',function($scope, MyFactory){
			$scope.countries = [];
			
			init();
			function init(){
				/* init() måste inte finnas det kan bara var bra att ha en funktion som sätter upp all data som behövs */
				$scope.countries = MyFactory.getCountries();
			}

			$scope.addCountry = function(){
				$scope.countries.push({name:$scope.userInput.country, city: $scope.userInput.city});
			}
		});
		
	</script>
	<script src="../../jquery-2.1.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html> 