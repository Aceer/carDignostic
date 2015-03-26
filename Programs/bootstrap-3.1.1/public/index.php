<?php
	require "../../lessphp/lessc.inc.php";
	$less = new lessc;
?>
<!DOCTYPE html>
<html lang="en" data-ng-app="app">
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
	  <div data-ng-view></div>
    </div>
	
	<script src="../../../../angular.min.js"></script>
	<script src="../../../../angular-route.js"></script>
<!-- Länka till script controllern senare. Controllern hämtar datan och kan visas inom det område som man skriver ng-controller="MyController", view`en får det scopet -->
	<script src="app/app.js"></script>
	<script src="app/factory/countriesFactory.js"></script>
	<script src="app/directive/testDirective.js"></script>
	<script src="app/controller/countriesController.js"></script>
	<script src="../../jquery-2.1.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html> 