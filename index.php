<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="font/weathericons-regular-webfont.eot">
	<link rel="stylesheet" href="font/weathericons-regular-webfont.svg">
	<link rel="stylesheet" href="font/weathericons-regular-webfont.ttf">
	<link rel="stylesheet" href="font/weathericons-regular-webfont.woff">
	<link rel="stylesheet" href="font/weathericons-regular-webfont.woff2">

	<link rel="stylesheet" href="font/fontawesome-webfont.eot">
	<link rel="stylesheet" href="font/fontawesome-webfont.svg">
	<link rel="stylesheet" href="font/fontawesome-webfont.ttf">
	<link rel="stylesheet" href="font/fontawesome-webfont.woff">
	<link rel="stylesheet" href="font/fontawesome-webfont.woff2">
	<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
	
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link href="/css/weather-icons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script src="/app.js"></script>
</head>
<body>

  
 	<header class="nav_menu col-md-12">
  		
  		<div class="row col-md-1 ">
  			<div class="toggle navbar navbar-fixed-top" id="menuButtom">
  				<a>
  					<i class="fa fa-bars"></i>
  				</a>
  			</div>
  		</div>

  		<div class="row col-md-6 col-md-offset-6">
  			
  			<div class="row dropdown-toggle">								
  				<a href="javascript:;" class="user-profile" data-toggle="dropdown" aria-expanded="false">
  					<img src="images/img.jpg" alt=""><span class="name" id="user-name">Andrew Kuktenko</span>
  					<span class=" fa fa-angle-down"></span>
  				</a>
  				<ul class="dropdown-menu dropdown-usermenu pull-right">
  					<li><a href="javascript:;"> Profile</a></li>
  					<li>
  						<a href="javascript:;">
  							<span class="badge bg-red pull-right">50%</span>
  							<span>Settings</span>
  						</a>
  					</li>
  					<li><a href="javascript:;">Help</a></li>
  					<li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
  				</ul>
  			</div>

  			<div class="row dropdown col-xs-1">
  				<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
  					<i class="fa fa-envelope-o"></i>
  					<span class="badge bg-green">6</span>
  				</a>
  				<ul id="menu1" class="dropdown-menu list-unstyled msg_list">
  					<li>
  						<a>
  							<span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
  							<span>
  								<span>John Smith</span>
  								<span class="time">3 mins ago</span>
  							</span>
  							<span class="message">
  								Film festivals used to be do-or-die moments for movie makers. They were where...
  							</span>
  						</a>
  					</li>
  					<li>
  						<div class="text-center">
  							<a>
  								<strong>See All Alerts</strong>
  								<i class="fa fa-angle-right"></i>
  							</a>
  						</div>
  					</li>
  				</ul>
  			</div>

  		</div>
  		
  	</header>
  	<main class="container">
  		<div class="row">
  			<div class="menu col-md-2">
  				<div class="row">
  					<div class="button col-md-12">
  						<a><h2>
  							Home
  						</h2></a>
  					</div>
  				</div>
  				<div class="row">
  					<div class="button col-md-12">
  						<a>
  							Weight
  						</a>
  					</div>
  				</div>
  				<div class="row">
  					<div class="button col-md-12">
  						<a>
  							Temperature
  						</a>
  					</div>
  				</div>
  				<div class="row">
  					<div class="button col-md-12">
  						<a>
  							Activity
  						</a>
  					</div>
  				</div>
  			</div>
  			<div class="content col-md-10">
  				<div class="row info-block-content">
  					<div class="info-block col-md-3">
  						<div class="row info-block-top">
  							<div class="temp col-md-3 col-md-offset-2">
  								<span id="temp">21</span>
  							</div>
  							<div class="wi wi-celsius col-md-2 ">
  								
  							</div>
  							<div class="wi wi-thermometer col-md-1 ">
  								
  							</div>
  						</div>
  						<div class="row info-block-bottom">
  							<h3 class="col-md-12">Temperature</h3>
  						</div>
  					</div>
  					<div class="info-block col-md-3">
  						<div class="row info-block-top">
  							<div class="hum col-md-3 col-md-offset-4">
  								<span id="hum">60</span>
  							</div>
  							<div class="wi wi-humidity col-md-2"></div>
  						</div>
  						<div class="row info-block-bottom">
  							<h3 class="col-md-12">Humidity</h3>
  						</div>
  					</div>
  					<div class="info-block col-md-3">
  						<div class="row info-block-top">
  							<div class="bar col-md-2 col-md-offset-2">
  								<span id="bar">400<sup><small>ppm</small></sup></span>
  								
  							</div>

  							<div class="wi wi-barometer col-md-1 col-md-offset-5">
  								
  							</div>
  						</div>
  						<div class="row info-block-bottom">
  							<h3 class="col-md-12">CO<sub><small>2</small></sub></h3>
  						</div>
  					</div>
  					<div class="info-block col-md-3">
  						<div class="row info-block-top">
  							<div class="pres col-md-2 col-md-offset-2">
  								<span id="pres">1000<sup><small>(Mil)</small></sup></span>
  							</div>
  							<div class="wi wi-small-craft-advisory  col-md-2 col-md-offset-6">
  							</div>
  						</div>
  						<div class="row info-block-bottom">
  							<h3 class="col-md-12">
  								Pressure
  							</h3>
  						</div>
  					</div>
  				</div>
  				<div class="row button-block col-md-10 col-md-offset-1">
  					<div class="col-md-2 col-sm-6">
  						<button type="button" class="btn btn-success btn-lg">
  							Hive
  						</button>
  					</div>

  					<div class="col-md-2 col-sm-6">
  						<button type="button" class="btn btn-success btn-lg">
  							Hive
  						</button>
  					</div>

  					<div class="col-md-2 col-sm-6">
  						<button type="button" class="btn btn-success btn-lg">
  							Hive
  						</button>
  					</div>

  					<div class="col-md-2 col-sm-6">
  						<button type="button" class="btn btn-success btn-lg">
  							Hive
  						</button>
  					</div>

  					<div class="col-md-2 col-sm-6">
  						<button type="button" class="btn btn-success btn-lg">
  							Hive
  						</button>
  					</div>

  					<div class="col-md-2 col-sm-6">
  						<button type="button" class="btn btn-success btn-lg">
  							Hive
  						</button>
  					</div>



  				</div>
  				<div class="row hive-graph">
  					<div class="graph-hadding col-md-12">
  						<div class="row">
  							<div class="col-md-6">
  								<h2 class="hadding">Hive progress</h2>
  							</div>
  							<div class="filter_div col-md-4 col-md-offset-2">
  								<div class="filter"
  								<div id="reportrange" class="pull-right">
  									<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
  									<span>December 30, 2016 - April 01, 2017</span> <b class="caret"></b>
  								</div>
  							</div>		
  						</div>
  					</div>
  					<div class="graph col-md-12">
  						<div class="col-md-12 col-sm-12 col-xs-12">
  							<div>
								<button id="ok" class="btn btn-success btn-lg">
								    Construct a graph
								</button>

  								<div id="chart_div"></div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </main>








<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/menu-hider.js"></script>
</body>


</html>