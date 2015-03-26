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
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
			</button>
			<a class="navbar-brand" href="#">Logo</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span><br> START</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-stats"></span><br> PERFORMANCE</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-wrench"></span><br> DIGNOSTICS</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-cog"></span><br> VEHICLE</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-globe"></span><br> MAPS</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
		<div class="jumbotron">
			<div id="profile-box">
				<div class="row profile-border-bottom">
					<div class="col-xs-3 profile-border-right">
						Left
					</div>
					<div class="col-xs-9 profile-border-left">
						Right
						<div data-ng-view></div>
					</div>
				</div>
				<div class="row profile-border-top">
					<div class="col-xs-4">
							<span class="carved">21</span>
					</div>
					<div class="col-xs-4">
							B
					</div>
					<div class="col-xs-4">
							C
					</div>
				</div>
			</div>
			<div id="btn-profile-toggle" class="carved profile-open"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span><span id="btn-profile-toggle-text"> Close</span></div>

	</div>







<div class="panel-group" id="boxFunctions" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="boxHeadingMap">
      <h1 class="panel-title">
        <a data-toggle="collapse" data-parent="#boxFunctions" href="#collapseBoxMap" aria-expanded="false" aria-controls="collapseBoxMap">
          <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Map on your latest runs
        </a>
      </h1>
    </div>
    <div id="collapseBoxMap" class="panel-collapse collapse" role="tabpanel" aria-labelledby="boxHeadingMap">
      <div class="panel-body">
		<div class="row">
			<div class="col-xs-12 col-md-3">
				Select a date you hade driven
				<select class="form-control">
					<option>Datum 2015-05-11</option>
					<option>Datum 2015-04-22</option>
					<option>Datum 2015-03-15</option>
					<option>Datum 2015-01-03</option>
				</select>
				<br>
				<div class="wrapper-inline">
					<div class="black-box1">
						<div class="text"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Start</div>
						<div class="dataValue"> 2015-12-10</div>
					</div>
					<div class="black-box1">
						<div class="text"><span class="glyphicon glyphicon-scale" aria-hidden="true"></span> Avg.Speed</div>
						<div class="dataValue"> 68 Kmh</div>
					</div>
					<div class="black-box1">
						<div class="text"><span class="glyphicon glyphicon-scale" aria-hidden="true"></span> Max.Speed</div>
						<div class="dataValue"> 148 Kmh</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-md-9">
				<div id="map-frame">
					<div id="map-canvas"></div>
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="boxHeadingEco">
      <h3 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#boxFunctions" href="#collapseBoxEco" aria-expanded="false" aria-controls="collapseBoxEco">
          <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> Eco drive
        </a>
      </h3>
    </div>
    <div id="collapseBoxEco" class="panel-collapse collapse" role="tabpanel" aria-labelledby="boxHeadingEco">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="boxHeadingF3">
      <h3 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#boxFunctions" href="#collapseBoxF3" aria-expanded="false" aria-controls="collapseBoxF3">
          <span class="glyphicon glyphicon-signal" aria-hidden="true"></span> Funktion 3
        </a>
      </h3>
    </div>
    <div id="collapseBoxF3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="boxHeadingF3">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="boxHeadingF4">
      <h3 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#boxFunctions" href="#collapseBoxF4" aria-expanded="false" aria-controls="collapseBoxF4">
          <span class="glyphicon glyphicon-signal" aria-hidden="true"></span> Funktion 4
        </a>
      </h3>
    </div>
    <div id="collapseBoxF4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="boxHeadingF4">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="boxHeadingF5">
      <h3 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#boxFunctions" href="#collapseBoxF5" aria-expanded="false" aria-controls="collapseBoxF5">
          <span class="glyphicon glyphicon-signal" aria-hidden="true"></span> Funktion 5
        </a>
      </h3>
    </div>
    <div id="collapseBoxF5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="boxHeadingF5">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script src="App/js/googleMap.js"></script>
	<script type="text/javascript" src="Programs/bootstrap-3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="App/js/btn-profile-toggle.js"></script>
<!-- Länka till script controllern senare. Controllern hämtar datan och kan visas inom det område som man skriver ng-controller="MyController", view`en får det scopet -->
</body>
</html> 