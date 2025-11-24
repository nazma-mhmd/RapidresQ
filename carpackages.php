<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/animate.css">
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
			background-image: url("img/servicebg.jpg");
			background-repeat: no-repeat;
			background-size: 100% ;
			 background-attachment: fixed;
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
		.conbox
		{
			background-color:  #3399ff;
			color: ;
			padding:10px;
			border-radius: 10px;
			border-width:5px;  
    		border-bottom-style:dashed;

		}
		.conbox2
		{
			background-color: #3399ff;
			color: ;
			padding:10px;
			border-radius: 10px 10px 0px 0px;
			height: 350px;
		}
		.red
		{
			color: red;
		}
		.col-sm-4 .btn
		{
			font-size: 18pt;
			border-radius: 0px 0px 10px 10px;
		}
	</style>
	</head>
<body style="">
	<div class="container-fluid ">
		<div class="row">
			<div class="col-sm-12 p">
			<!---navigation bar-->
				<?php
						include"navigation/navigation.php";
				?>
			</div>

			<div class="container" align="center" style="margin-top: 80px;">
				<div class="col-sm-12 animated slideInRight ">
					<a href="#"><img src="img/carbw.png" width="70%"></a>
				</div>
				<div class="col-sm-4">
					<div class="conbox ">
						<h1>Basic Package</h1>
						<h4>$999</h4>
					</div>
					
					<div class="conbox2" align="left">
						<center><img src="img/tool.png" width="50%" ></center>
						<ul>
							<li>Water Wash</li>
							<li>General Checkup</li>
							<li>Minor Adjustments</li>
							<li>Oil Changes(Semi-Synthetic)</li>
							<li>Lubrication</li>
							<li>Polish</li>
							<li>Parts swap <span class="label label-danger">(Extra Chargers)</Label></li>
						</ul>
					</div>	
					<a class="btn btn-block btn-info" href="#">Select package</a>
				</div>
				<div class="col-sm-4">
					<div class="conbox ">
						<h1>Special Package</h1>
						<h4>$1999</h4>
					</div>
					
					<div class="conbox2" align="left">
						<center><img src="img/tool3.png" width="50%" ></center>
						<ul>
							<li>Foam Based Water Wash</li>
							<li>Complete Checkup</li>
							<li>Minor Adjustments</li>
							<li>Oil Changes(Synthetic)</li>
							<li>Fliter Cleaning</li>
							<li>Lubrication</li>
							<li>Teflon Polish</li>
							<li>Parts swap<span class="label label-danger">(Extra Chargers)</Label></li>
						</ul>
					</div>	
					<a class="btn btn-block btn-info" href="#">Select package</a>
				</div>
				<div class="col-sm-4">
					<div class="conbox ">
						<h1>Premier Package</h1>
						<h4>$2499 </h4>
					</div>
					
					<div class="conbox2" align="left">
						<center><img src="img/tool2.png" width="60%" ></center>
						<ul>
							<li>Foam Based Jet Water Wash</li>
							<li>Complete Checkup</li>
							<li>Minor Adjustments</li>
							<li>Oil Changes(Synthetic and Racing)</li>
							<li>Fliter Change</li>
							<li>Lubrication</li>
							<li>Wheel Alignment</li>
							<li>Ceramic Polish</li>
							<li>Parts swap<span class="label label-danger">(Extra Chargers)</Label></li>
						</ul>
					</div>	
					<a class="btn btn-block btn-info" href="#">Select package</a>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>