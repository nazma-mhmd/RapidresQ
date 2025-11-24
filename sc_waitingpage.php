<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
					$page='login';	include"navigation/navigation.php";
				?>
		

		</div>
	</div>`
</div><br><br>
	<div class="container-fluid" style="margin-top: 30px;">
		<div class="row">
			<?php 
				require_once('php/config.php');
				$sc_id=$_GET['op'];
				$sql="select * from sc where sc_id='$sc_id'";
				$re=mysqli_query($con,$sql);
				$m=mysqli_fetch_assoc($re);
				$name=$m['sc_name'];
				$reg_no=$m['reg_no'];
				$district=$m['district'];
				$email=$m['email'];
						
			?>
			<div class=" col-sm-offset-2 col-sm-4">
				<img src="img/waiting.png" width="100%">
			</div>
			<div class="col-sm-offset col-sm-3" align="left">
				<h3><B><span class="fa fa-clock-o"></span> Approval Under Progress</B></h3><br>
				<h3 align="center"><?php echo $name ?></h3>
				<h4 align="center"><?php echo $reg_no ?></h4>
				<h4 align="center"><?php echo $district ?></h4>
				<h4 align="center"><?php echo $email ?></h4><br>
				<h3 align="">Conatct us</h3>
				<div class="col-sm-12">
					<h4><span class="fa fa-cogs"></span>Service-Spot</h4>
				</div>
				<div class="col-sm-3">
					<span class="fa fa-phone"></span> Phone 
				</div>
				<div class="col-md-9">
					: 0821 815155,854545<br>	
				</div>
				<div class="col-sm-3">
					<span class="fa fa-mobile"></span> Mobile  
				</div>
				<div class="col-md-9">
					: 9738232149,8088278797<br>
				</div>
				<div class="col-sm-3">
					<span class="fa fa-envelope-o"></span> Email  
				</div>
				<div class="col-md-9">
					: servicespot@gmail.com<br>
				</div>
				<div class="col-sm-3">
					<span class="fa fa-address-book-o"></span> Address 
				</div>
				<div class="col-md-9">
					: #108,2nd cross(south)<br>
					  Aniketana road,Kuvempunagar<br>
					  Mysuru-570023
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