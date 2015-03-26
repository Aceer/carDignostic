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
    <link href="Programs/bootstrap-3.1.1/css/bootstrap2.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
<div id="boxLogin">
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-4 col-lg-6 col-lg-offset-3">
    <div class="panel panel-default">
      <div class="panel-body">
          <form>
            <div class="form-group">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="Enter email"> 
            </div>
            <div class="form-group">
              <label for="inputPass">Password</label>
              <input type="password" class="form-control" id="inputPassword" placeholder="password">
            </div>
            <button type="submit" class="btn btn-default">Login</button>
          </form>
          </div>
    </div>
    </div>
  </div>
</div>
</div>

	<script src="Programs/AngularJs-1.3.13/angular.min.js"></script>
	<script src="Programs/AngularJs-1.3.13/angular-route.min.js"></script>
	<script src="Programs/JQuery-2.1.1/jquery.min.js"></script>
	<script src="App/app.js"></script>
	<script src="App/controllers/startController.js"></script>
	<script type="text/javascript" src="Programs/bootstrap-3.1.1/js/bootstrap.min.js"></script>
<!-- Länka till script controllern senare. Controllern hämtar datan och kan visas inom det område som man skriver ng-controller="MyController", view`en får det scopet -->
</body>
</html> 