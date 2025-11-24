<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
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
			background-image: url("img/.jpg");
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
		.black
		{
			color: black;
		}
		
	</style>
	</head>
<body style="">
	<div class="container-fluid  ">
		<div class="row">
			<div class="col-sm-12 p">
				<?php
					$page='Contact us';	include"navigation/navigation.php";
				?>
		

		</div>
	</div>`
</div><br><br>
	<div class="container-fluid" style="margin-top: 30px;">
		<div class="row">
			<div class=" col-sm-offset-1 col-sm-5">
				<img src="img/carservice.png" width="100%">
			</div>
			<div class="col-sm-offset-1 col-sm-5" align="left">
				<h1><B><span class="fa fa-cogs"></span> RapidresQ</B></h1><br>
				<h3>Contact Us</h3><br>
				<div class="col-sm-2">
					<span class="fa fa-phone"></span> Phone 
				</div>
				<div class="col-md-9">
					: 0821 815155,854545<br>	
				</div>
				<div class="col-sm-2">
					<span class="fa fa-mobile"></span> Mobile  
				</div>
				<div class="col-md-9">
					: 9949527957, 8328384360<br>
				</div>
				<div class="col-sm-2">
					<span class="fa fa-envelope-o"></span> Email  
				</div>
				<div class="col-md-9">
					: RapidresQ@gmail.com<br>
				</div>
				<div class="col-sm-2">
					<span class="fa fa-address-book-o"></span> Address 
				</div>
				<div class="col-md-9">
					:20-3-4,
					Hanuman Nagar, Chowrastha,
					Godavarikhani, Karimnagar, 505209.
				</div>
				<div class="col-sm-6" align="center">
					<div align="" style="font-size:22pt;color: black;">
						<x style="font-size:12pt;">Stay Connected:</x><br>
						<a href="#"><span class="fa fa-facebook-square black" ></span></a>
						<a href="#"><span class="fa fa-google-plus-square black" ></span></a>
						<a href="#"><span class="fa fa-instagram black" ></span></a>
						<a href="#"><span class="fa fa-twitter black"></span></a>
						<a href="#"><span class="fa fa-linkedin-square black" ></span></a>
						<a href="#"><span class="fa fa-gmail black" ></span></a>
					</div>
				</div>
			</div>
			<div class="col-sm-12" align="center" style="margin-top: 10px;">
					<form class="form" action="php/feedback.php" method="POST">
					<div class="col-sm-offset-4 col-md-2 form-group" align="left">
						<label class="control-label">Namsse : </label>
						<input type="text" class="form-control" placeholder="Name" name="name" required>
					</div>
					<div class="col-md-2 form-group form-group" align="left">
						<label class="control-label">Email : </label>
						<input type="text" class="form-control" placeholder="Email" name="email" required>
					</div>		
					<div class="col-sm-offset-4 col-sm-4 form-group">
						<label class="control-label">Feedback/Suggestions</label>
						<textarea class="form-control" name="fb" required placeholder="Your Feedback And Suggestions"></textarea><br>
						<input type="submit" value="submit" class="btn btn-info">
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