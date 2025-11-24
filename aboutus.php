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
			padding: 0px;
			background-image: url("img/bluebg.jpg");
			background-size: 100% 100%;
			background-repeat: no-repeat;
			background-attachment: fixed;
			
		}
		.item 
		{
			height:720px;
			font-weight: bolder;

		}
		
		.Y{
			color: #ffff00;
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
		.text
		{
			text-shadow: 5px 5px 10px black;
		}
		.icons
		{
			font-size: 50pt!important;
		}
	</style>
	</head>
<body style="">
	<div class="container-fluid  ">
		<div class="row">
			<div class="col-sm-12 p">
				<?php
					$page='About us';	include"navigation/navigation.php";
				?>
		

		</div>
	</div>
</div><br><br>
	<div class="container-fluid" style="margin-top: 30px;">
		<div class="row">
			<div class="col-sm-7" align="center">
				<h1><B>Quality. Innovation . Excellence</B></h1><br>
				<div class="col-sm-4">
					<span class="fa fa-bolt icons"></span><br>
					<h3>Faster Service</h3>
				</div>
				<div class="col-sm-4">
					<span class="fa fa-wrench icons"></span><br>
					<h3>Quality Service</h3>
				</div>
				<div class="col-sm-4">
					<span class="fa fa-opencart icons"></span><br>
					<h3>Genuine Parts</h3><br><br><br>
				</div>
				<div class="col-sm-4">
					<span class="fa fa-users icons"></span><br>
					<h3>Professional Mechanics</h3>
				</div>
				<div class="col-sm-4">
					<span class="fa fa-spinner icons"></span><br>
					<h3>Real-time Update</h3><br><br>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-4">
						<span class="fa fa-phone icons"></span><br>
						<h3>Customer Care</h3>
					</div>
				</div>
			</div>

		</div>

	</div>
		<!---footer bar-->
				<?php
						include"navigation/footer.php";
				?>
</body>


</html>