<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
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
		.con1
		{
			margin-top: 50px;
			font-family: Capitalize;
		}
		.gcircle
		{
			border:2px solid black;
			width:50px;
			height: 50px;
			padding:5px;
			border-radius: 50%;
			font-size: 20pt;

		}
		.circle
		{
			border:2px solid red;
			width:80px;
			height: 80px;
			padding:5px;
			border-radius: 50%;
		}
		.parent
		{
			position: relative;
		}
		.circle::after{
			content: ">>>>>";
			color: blue;
			top:30px;
			position: absolute;
			left: 130px;
		}
		.circle1
		{
			border:2px solid red;
			width:80px;
			height: 80px;
			padding:5px;
			border-radius: 50%;
		}
		.price td{
			text-align: right;
		}
		.backg
		{
			padding: 0px;
			background-image: url("img/autong.jpg");
			background-size: 100%;
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		.modal-content
		{
		}
		.model-body .h1,h1
		{
			margin: 0px!important;
		}
		.panel-info .panel-body
		{
			background-color: #e6f2ff;
			border-radius: 0px 0px 4px 4px;
			
		}
		.red
		{
			color: red;
		}
		.panel-success .panel-body
		{
			background-color: white;
		}
		.smdwxbx
		{
			border:px solid grey;
			background-color: #;
			border-radius: 5px;

		}
	</style>
	</head>
<body class="backg">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 p">
					<?php
						include"navigation/navigation_user.php";
				?>
			</div>
		</div>
			<div class="container"  >
				<div class="row" align="">
					<div class="col-sm-4" >
						<div class="modal-dialog modal-sm" align="center">
							<div class="modal-content">
								<img src="img/user.jpg" width="60%" class="img-circle img-responsive">
								<div class="modal-body">
									
									<h4><B>Akash M Anand</B></h4>
									<h4><B> 9738232149 </B>	</h4>
									<div id="details" class="collapse" align="left">
										<table class="table table-striped">
											<tbody>
											<tr>
												<th>email </th>
												<td>akashma903@gmail.com</td>
											</tr>
											<tr>
												<th>District</th> 
												<td> Mysuru</td>
											</tr>
											<tr>
												<th>City </th>
												<td> Mysuru</td>
											</tr>
												<th>Address</th>
												<td>#108,2nd cross(south)
											Kuvempunagar, Mysuru
											570023</td>										
											</tr>
											</tbody>
										</table>
										<a href="profile_details.php" class="btn btn-warning btn-block">Edit Profile</a>					
									</div>
								</div>
								<div class="modal-footer">
									<a class="btn btn-info btn-block btn-lg" href="#details" data-toggle="collapse">View Profile details</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-8" style="margin-top: 30px">
						<div class="panel-info">
							<div class="panel-heading">
								<h4 class="p"><B>Service Booked History  <a style="float: right;" class="label label-info">3</a></B></h4>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<td>Order_id</td>
												<td>Image</td>
												<td>Model Name</td>
												<td>Vehicle type</td>
												<td>Date</td>
												<td>Action</td>
											</tr>
										</thead>
											<tbody>
												<tr>
													<td>#5545</td>
													<td><img src="img/man.png" width="30px"> </td>
													<td><span class="label label-info">Nissian GTR</span>
													</td>
													<td><img src="img/Cars/body-style-diesel-blue.svg" width="70px"></td>
													<td>Dec 10,18</td>
													<td><span class="glyphicon glyphicon-trash"></span> <span class="glyphicon glyphicon-edit"></span></td>
												</tr>
												<tr>
													<td>#5545</td>
													<td><img src="img/man.png" width="30px"> </td>
													<td><span class="label label-info">Nissian GTR</span>
													</td>
													<td><img src="img/Cars/body-style-diesel-blue.svg" width="70px"></td>
													<td>Dec 10,18</td>
													<td><span class="glyphicon glyphicon-trash"></span> <span class="glyphicon glyphicon-edit"></span></td>
												</tr>
											</tbody>
									</table>
									<div align="center">
										<a href="manage_order.html" align="center" class="btn btn-success">View all</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-8" style="margin-top: 20px;">
						
					</div>

				</div>
			</div>
	</div>
	

</body>
</html>