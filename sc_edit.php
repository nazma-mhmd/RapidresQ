
	<title>Re-Appyling</title>
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
			background-image: url("img/sbg.png");
			background-size: 100% ;
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		.item 
		{
			height:720px;
			font-weight: bolder;

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
		.con1
		{
			background-image: url("img/cogs.png");
			background-repeat: no-repeat;
			background-size: 100% ;
			margin-top:120px;
			border-radius:10px;
			color: black !important;
			background-color: rgba(153, 153, 153,0.8);
			
		
		}
		.con2
		{
			margin-top:30px;
			background-color: rgba(255,255,255,0.9)!important;
			font-size: 14px;
			padding: 20px;
			background-color: #edf2f7;
			border-radius: 7px;
			border:solid;
		}
		.carousel-caption
		{
			color: black !important;
		}
	</style>
	</head>
<body style="">
	<div class="container-fluid ">
		<div class="row">
				<?php
					$page='login';	include"navigation/navigation.php";
				?><br><br>
				<div class="container">
					<div class="col-sm-3 con1" align="center">
					<br><br><br>
					<div id="myC" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="myC" data-slide-to="0" class="active"></li>
							<li data-target="myC" data-slide-to="1"></li>
							<li data-target="myC" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active" style="height: 480px">
								<br>
								<div class="circle" style>
									<img src="img/graph.png" width="100%">
								</div><br><br><br><br><br><br>
								<div class="carousel-caption">
									<h3>CARSPOT</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
								</div>
							</div>
							<div class="item" style="height: 480px">
								<div class="circle">
									<img src="img/graph.png" width="100%">
								</div><br><br><br><br><br><br>
								<div class="carousel-caption">
									<h3>Welcome to MY Site</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
								</div>
							</div>
							<div class="item " style="height: 480px">
								<div class="circle">
									<img src="img/graph.png" width="100%">
								</div><br><br><br><br><br><br>
								<div class="carousel-caption">
									<h3>Welcome to MY Site</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="col-sm-9 con2" >
					<h1 class="red" style="margin-top: 10px"><span class="fa fa-expeditedssl"></span>Re-Apply Your Service Center Here</h1>
					<div style="width:70% ;height:4px;background-color:red;"></div>
					<div style="width:100% ;height:2px;background-color:black;"></div>
					<?php 
						require_once('php/config.php');
						$sc_id=$_GET['op'];
						$sql="select * from sc where sc_id='$sc_id'";
						$re=mysqli_query($con,$sql);
						$m=mysqli_fetch_assoc($re);
						$name=$m['sc_name'];
						$password=$m['password'];
						$reg_no=$m['reg_no'];
						$since=$m['since'];
						$phone_no=$m['phone_no'];
						$mobile_no=$m['mobile_no'];
						$email=$m['email'];
						$district=$m['district'];
						$landmark=$m['landmark'];
						$pin=$m['pin'];
						$address=$m['address'];
						$about=$m['about'];
						$service=$m['service'];
						$photo=$m['photo'];
									
					?>	
					<form method="POST" action="php/sc_edit.php?op=<?php echo $sc_id ?>" class="form" enctype="multipart/form-data">
						<br>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Service Center Name</label>
								<input type="text" class="form-control" placeholder="Name" name="sc_name" required value="<?php echo $name ?>" readonly >
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Password</label>
								<input type="text" class="form-control" placeholder="Name" name="password" required value="<?php echo $password ?>" readonly>
							</div>
						</div>
						<div class="col-sm-4">						
							<div class="form-group">
								<label>Reg_No(licence no)</label>
								<input type="text" class="form-control" placeholder="Reg_No" name="reg_no" required value="<?php echo $reg_no ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Since</label>
								<select required class="form-control" name="since" value="<?php echo $since ?>">
										<option value="">--select Year--</option>
										<option value="2015" <?php if($since=='2015')
										{
											echo 'selected';
										} ?>>2015</option>
										<option value="2016"<?php if($since=='2016')
										{
											echo 'selected';
										} ?>>2016</option>
										<option value="2017"<?php if($since=='2017')
										{
											echo 'selected';
										} ?>>2017</option>
										<option value="2018"<?php if($since=='2018')
										{
											echo 'selected';
										} ?>>2018</option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Phone No</label>
								<input type="number" class="form-control" placeholder="Phone No" name="phone_no" required value="<?php echo $phone_no ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Mobile No</label>
								<input type="number" class="form-control" placeholder="Mobile No" name="mobile_no" required value="<?php echo $mobile_no ?>">
							</div>
						</div>
						<div class="col-sm-4">	
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" placeholder="email" name="email" required value="<?php echo $email ?>" readonly>
							</div>					
							<div class="form-group">
								<label>District</label>
								<select required class="form-control" name="district" >
										<option value="">--select district--</option>
										<option value="Mysuru" <?php if($district=='Mysuru')
										{
											echo 'selected';
										} ?>
										>Mysuru</option>
										<option value="Bangaluru"<?php if($district=='>Bangaluru')
										{
											echo 'selected';
										} 
										else?>
										>Bangaluru</option>
										<option value="Hassan"<?php if($district=='Mysuru')
										{
											echo 'Hassan';
										} ?>
										>Hassan</option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">	
												
							<div class="form-group">
								<label>Land Mark</label>
								<input type="text" class="form-control" placeholder="Land Mark" name="landmark" required value="<?php echo $landmark ?>">
							</div>
							<div class="form-group">
								<label>Pin</label>
								<input type="number" class="form-control" placeholder="Pin" name="pin" required value="<?php echo $pin ?>">
							</div>
						</div>
						<div class="col-sm-4">						
							<div class="form-group">
								<label>Address</label>
								<textarea class="form-control" style="height:120px;" placeholder="Address" name="address" required><?php echo $address ?></textarea>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>About Your Company</label>
								<textarea class="form-control" style="height:100px;" placeholder="About Your Company" name="about" required><?php echo $about ?></textarea>
							</div>
						</div>
						<div class="col-sm-6">
								<label>Service Done for</label>
								<div class="form-group">
									<div class="col-sm-6">
										<label>
										 	<img  src="<?php if($service=='bike')
										 	{ echo 'img/bike/bike.png'; }
										 	else{ echo 'img/car/car.svg'; } ?>" width="200px" value="bike" required>
										 </label>
									 </div>
	    						</div>
	    				</div>	
	    				
						<div class="col-sm-12" align="ceter">
							<input type="checkbox" name="" class="chk" required checked><label>I agree all statements in <z class="red">Terms and Conditions</z></label>
						</div>
						<div class="col-sm-offset-4 col-sm-4">
							<div class="form-group">
								<input type="submit" class="btn btn-warning form-control" value="Resubmit Form">
							</div>

					</form>
				</div>
			</div>
	</div>
	<!---footer bar-->
				<?php
						include"navigation/footer.php";
				?>
</div>



</body>
</html>
			<!--<div class="col-sm-6">
				<form class="form-horizontal" method="post" action="#">
					<div class="form-group">
						<label class="col-sm-3 control-label">Enter your Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Enter your Password</label>
						<div class="col-sm-9">
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<button class="btn btn-block">Submit</button>
					</div>
				</form>
			</div>-->
		</div>

</body>
</html>