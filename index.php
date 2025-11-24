<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<style type="text/css">
		.p
		{
			padding:0px;
			margin: 0px;	
			border-radius: 0px;
		}

		body
		{
			font-family:sans-serif,'Source Sans Pro';
			backgwqdround-color: black;
			cowqdlor:rgb(255, 204, 0);	
			
		}
		.item 
		{
			height:720px;
			font-weight: bolder;

		}
		
		.Y{
			color:  #bfbfbf;
			text-shadow: 5px 5px 10px black;
		}
		.modal-body
		{
			background-image: url("img/grey.jpg");
			background-repeat: no-repeat;
			background-size: 100%;
		}
		.circle
		{
			background-color: #fcfcfc;
			width: 80px;
			height: 80px;
			border-radius: 50%;
			padding: 25px;
			box-shadow: 0px 4px 2px 2px #e6e6e6;
			font-size:24pt;
			margin-bottom: 40px;
		}
		.circle2
		{
			background-color: #fcfcfc;
			width: 80px;
			height: 80px;
			border-radius: 50%;
			padding: 25px;
			box-shadow: 0px 4px 2px 2px #e6e6e6;
			font-size:24pt;
			
		}
		.animation-duration
		{
			animation-duration:1s;

		}
	</style>
	</head>
<body style="">
	<div class="container-fluid ">
		<div class="row">
			<div class="col-sm-12 p">
			<!---navigation bar-->
				<?php
					$page='home';	include"navigation/navigation.php";
				?>
				<br><br>	
				<div class="carousel slide" id="myC" data-ride="carousel" style="background-color: black;">
					<ol class="carousel-indicators">
						<li data-target="#myC" data-slide-to="0" class="active"></li>
						
						<li data-target="#myC" data-slide-to="1" ></li>
						<li data-target="#myC" data-slide-to="2" ></li>
						<li data-target="#myC" data-slide-to="3" ></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/a.jpg" alt="" width="100%">
							<div class="carousel-caption">
								<h1 class="Y">Fast Service</h1>
								<p class="Y">We Provide Fastest service with time to time update over your Automobile service </p>
							</div>
						</div>	
						<div class="item">
							<img src="img/c.jpg" alt="" width="100%" >
							<div class="carousel-caption">
								<h1 class="Y">Top Class Mechanics</h1>
								<p class="Y">Services are done by Professionals ,Who are trained under top most Automobile manufacturers</p>
							</div>
						</div>
						<div class="item">
							<img src="img/b.jpg" alt="" width="100%" >
							<div class="carousel-caption">
								<h1 class="Y">Foam base Wash</h1>
								<p class="Y">Foam base washing with Water pressure cleaner for complete dirt remove from tinny space and gaps</p>
							</div>
						</div>
					<div>
						<a class="left carousel-control" href="#myC" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class=""></span>
						</a>
						<a class="right carousel-control" href="#myC" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						</a>
					</div>	
				</div>
		</div>
	</div>
</div>
	<div class="container" style="margin-top: 30px;">
			<div class="col-sm-6 animated fadeInLeft animation-duration	">
				<h1 class="">About <x style="color: red">Car Spot</x> Dealership</h1>
				<div style="width: 140px ;height:2px;background-color:black;"></div>
				<div style="width: 80px ;height:2px;background-color:black;margin-top:10px;"></div><br>
				<h4>Everthing you need to build an amazing dealership</h4>
				<h4>automative responsive website</h4><br>
				<p>Automobilespot is not only a hub where buyers and sellers can interact,it is alsoa
					comprehensive automative portal with a forms decidated to all
					automative discussions, a blog that keeps the user up to date with the
					latest happenings in automative industry.
			</div>
			<div class="col-sm-6">
				<div class="animated fadeInRight animation-duration">
					<img src="img/gtr.png" width="100%">
				</div>
			</div>
			<div  class="row">
				<div class="col-sm-3 animated fadeInUp delay-1s">
					<div class="circle">
						<span class="glyphicon glyphicon-bell"></span>
					</div>
					<h4>Dealership</h4> 
					<p>WE have the right caring, experience
						and dedicated professional for you
					</p>
				</div>
				<div class="col-sm-3 animated fadeInUp delay-1s">
					<div class="circle">
						<span class="glyphicon glyphicon-bell"></span>
					</div>
					<h4>Engine Upgrades</h4>
					<p>WE have the right caring, experience
						and dedicated professional for you
					</p>
				</div>
				<div class="col-sm-3 animated fadeInUp delay-1s">
					<div class="circle">
						<span class="glyphicon glyphicon-bell"></span>
					</div>
					<h4>Security Inspections</h4>
					<p>WE have the right caring, experience
						and dedicated professional for you
					</p>
				</div>
				<div class="col-sm-3 animated fadeInUp delay-1s">
					<div class="circle">
						<span class="glyphicon glyphicon-bell"></span>
					</div>
					<h4>Break Checkup</h4>
					<p>WE have the right caring, experience
						and dedicated professional for you
					</p>
				</div>
			</div>
			<div class="row" style="margin-top: 30px;">
				<div class="col-sm-offset-3 col-sm-6" align="center">
					<h1>Our <x style="color:red;">Features</x> Services</h1>
					<div style="width: 140px ;height:2px;background-color:black;"></div>
					<div style="width: 80px ;height:2px;background-color:black;margin-top:10px;"></div><br>
					<p>ghsvd wefvhd nwef tre, dfreqf qwef erwf we wr3rwqreqw rwqdvgew n b fwef hwewe gevwf jh fhernf qhjwbf n
					dsfefweffeef.</p>
				</div>
			</div>
			<div class="row" style="margin-top: 20px;">
				<div class="col-sm-4 animated fadeInLeft animation-duration">
					<div class="row">
						<div class="col-sm-9">
							<h4>Engine Upgrades</h4>
							<p>WE have the right caring, experience
								and dedicated professional for you
							</p>
						</div>
						<div class="col-sm-3 circle2">
							<span class="glyphicon glyphicon-bell"></span>
						</div>
					</div>
					<div class="row" style="margin-top:20px">
						<div class="col-sm-9">
							<h4>Automobiles Inspection</h4>
							<p>WE have the right caring, experience
								and dedicated professional for you
							</p>
						</div>
						<div class="col-sm-3 circle2">
							<span class="glyphicon glyphicon-bell"></span>
						</div>
					</div>
					<div class="row" style="margin-top:20px">
						<div class="col-sm-9">
							<h4>Automobiles General check up</h4>
							<p>WE have the right caring, experience
								and dedicated professional for you
							</p>
						</div>
						<div class="col-sm-3 circle2">
							<span class="glyphicon glyphicon-bell"></span>
						</div>
					</div>
				</div>
				<div class="col-sm-4 animated fadeInUp animation-duration" align="center">
					<img src="img/man.png" width="90%" >
				</div>
				<div class="col-sm-4 animated fadeInRight animation-duration">
					<div class="row">
						<div class="col-sm-3 circle2">
							<span class="glyphicon glyphicon-bell"></span>
						</div>
						<div class="col-sm-9">
							<h4>Automobiles Oil Change</h4>
							<p>WE have the right caring, experience
								and dedicated professional for you
							</p>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-sm-3 circle2">
							<span class="glyphicon glyphicon-bell"></span>
						</div>
						<div class="col-sm-9">
							<h4>Power Streeing</h4>
							<p>WE have the right caring, experience
								and dedicated professional for you
							</p>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-sm-3 circle2">
							<span class="glyphicon glyphicon-bell"></span>
						</div>
						<div class="col-sm-9">
							<h4>Wheel Balancing</h4>
							<p>WE have the right caring, experience
								and dedicated professional for you
							</p>
						</div>
					</div>
				</div>			
			</div>
	</div>
	<div class="container-fluid" style="margin: 0px">
		<div class="row" style="margin-top: 20px;">
			<div class=" col-sm-6" style="background-color:#c2be89;height:300px;" align="center">
				<br><br><h7>Want To Sale Car or Bike ?</h7>
				<h2>ARE YOU LOOKING FOR CAR OR BIKE ?</h2>
				Search your car in our Inventory and request a
				qoute omn the vechicle of your choosimg
				<img src="img/lam.png" width="100%">
			</div>
			<div class=" col-sm-6" style="background-color: #f2f2f2;height:300px;" align="center">
				<br><br><h7>Want To Sale Car or Bike ?</h7>
				<h2>DO YOU WANT TO SELL YOUR CAR OR BIKE ?</h2>
				Register search your Automobiles in our Inventory and a
				qoute on the vechicle of your choosing
				<img src="img/sv.png" width="90%">
			</div>
		</div>
	</div>
<!---footer bar-->
				<?php
						include"navigation/footer.php";
				?>
</body>
</html>