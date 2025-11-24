
	<title>user register</title>
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
			background-image: url("img/regbg2.png");
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
		.codn1
		{
			background-image: url("img/pink.jpg");
			background-repeat: no-repeat;
			background-size: 100;
			margin-top:60px;
			border-radius:10px;
			color: white;
			
		
		}
		.cosn2
		{
			margin-top:30px;
			background-color: rgba(255,255,255,.9)!important;
			font-size: 14px;
			padding: 20px;
			background-color: #edf2f7;
			border-radius: 7px;
		}
	</style>
	</head>
<body style="">
	<div class="container-fluid ">
		<div class="row">
				<?php
					$page='Register';	include"navigation/navigation.php";
				?>
		
			</div><br><br><br>
			<div class="col-sm-offset-2 col-sm-6 con2" style="color:whit;text-shadow: 1.5px 1px 4px  white">
				<h1 class="red" style="margin-top: 10px"><span class="glyphicon glyphicon-lock"></span>Register</h1>
				<div style="width:200px ;height:4px;background-color:red;"></div>
				<div style="width:100% ;height:2px;background-color:;"></div>	
				<form method="POST" action="php/user_reg.php" class="form-horizontal" name="user_register">
					<br>
					<div class="form-group">
						<div class="col-sm-3">
							<label class="control-label">Name</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" placeholder="Name" name="user_name" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
							<label  class="control-label"  maxlength="10">Contact Number</label>
						</div>
						<div class="col-sm-8">
							<input type="number" class="form-control" placeholder="Conatact number" name="contact_no" lenght="10" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
							<label  class="control-label">Email</label>
						</div>
						<div class="col-sm-8">
							<input type="email" class="form-control" placeholder="Email" name="email" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
							<label  class="control-label">Password</label>
						</div>
						<div class="col-sm-8">
							<input type="password" class="form-control" placeholder="Password" name="password" id="pw" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
							<label  class="control-label">Conform Password</label>
						</div>
						<div class="col-sm-8">
							<input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword" id="cpw" onblur="passwordvali()" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
						<label  class="control-label">Pin</label>
						</div>
						<div class="col-sm-8">
							<input type="number" class="form-control" placeholder="pin" name="pin"  required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
							<label class="control-label">District</label>
						</div>
						<div class="col-sm-8">
							<select required class="form-control"  name="district" >
									<option value="">--Select District--</option>
									<option value="Warangal">Warangal</option>
									<option value="Karimnagar">Karimnagar</option>
									<option value="Godavarikhani">Godavarikhani</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3" align="left">
      						<label class="control-label">Address</label>
      					</div>
      					<div class="col-sm-8">
      						<textarea class="form-control" style=" height: 100px;" name="address"  placeholder="Address"></textarea>
      					</div>
      				</div>
					
					<div align="center">
						<div class="form-group">
							<input type="checkbox" name="" class="chk" required>I agree all statements in <z class="red">Terms and Conditions</z>
						</div>
						<div class="form-group">
							<input type="Submit" id="btn" class="btn btn-success btn-block " value="Register" disabled>
						</div>
					</div>

				</form>
			</div>
	</div>
</div>
<!---footer bar-->
				<?php
						include"navigation/footer.php";
				?>
<script type="text/javascript">
	function passwordvali()
		{	
			var pw=document.user_register.password.value;
			var cpw=document.user_register.confirmpassword.value; 
			if(pw!=cpw)
			{
				alert("password doesn't match");
				document.getElementById("pw").style.border="solid red";
				document.getElementById("cpw").style.border="solid red";
			}
			else
			{
				if(pw==null)
				{
					alert("Enter Password and Confirm password")
				}
				else
				{
					alert("Password matched")
					document.getElementById("pw").style.border="solid ";
					document.getElementById("cpw").style.border="solid ";
					document.getElementById("btn").disabled=false;
				}
			}

		}
</script>

</body>
</html>
		</div>

</body>
</html>