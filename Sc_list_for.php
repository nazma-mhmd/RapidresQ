<!DOCTYPE html>
<html>
<head>
	<title>Service Center Type</title>
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
			background-image: url("img/bybg-001.jpg");
			background-repeat: no-repeat;
			background-size: 100%		;
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
		.rotate
		{
			transform: rotate(45deg)
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
			<div class="col-sm-12">
				<h1 style="color: white;">Service Centers for :</h1>
			</div>
			<div class="container-fluid p" align="center" style="margin-top: 80px;">
					<div class="col-sm-6 animated slideInLeft">
						<a href="bikepackages.php"><img src="img/bikebw.png" class="rotate " width="40%"></a>
					</div>
					<div class=""></div>
					<div class="col-sm-offset-6 col-sm-6 animated slideInRight"  >
						<a href="carpackages.php"><img src="img/carbw.png" width="61%"></a>
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