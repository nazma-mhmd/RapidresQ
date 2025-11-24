<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/animate.css">
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
			background-image: url("img/half-background.png");
			background-size: 100% ;
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
		
		.text
		{
			text-shadow: 5px 5px 10px black;
		}
	</style>
	</head>
<body style="">
	<div class="container-fluid  ">
		<div class="row">
			<div class="col-sm-12 p">
			<!---navigation bar-->
				<?php
					$page='Register';	include"navigation/navigation.php";
				?>

		</div>
	</div>
</div><br><br>
	<div class="container-fluid" style="margin-top: 30px;">
		<div class="row" align="center">
			<h1 style="color: red;">Register Here</h1>
			 <div class="col-md-6">
			 	<h2 class="text">Service Center</h2>
			 	<a href="sc_registration.php">
			 		<img src="img/sc.png" width="100%">
			 		</a>
			 </div>
			 <div class="col-md-6">
			 		<h2 class="text">User</h2>
			 	<a href="user_register.php">
			 		<img src="img/multy-user.png" width="30%">
			 	
			 	</a>
			 </div>
		</div>
<div style="margin-top: 124px;">
</div>
	</div>
	<!---footer bar-->
				<?php
						include"navigation/footer.php";
				?>	
</body>
</html>