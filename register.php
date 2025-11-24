
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
			background-image: url("img/aboutus.jpg");
			background-size: 100% 100%;
			background-repeat: no-repeat;
			background-attachment: fixed;
			color: white;
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
						include"navigation/navigation.php";
				?>
		<!--<div class="col-sm-offset-1 col-sm-3 con1" align="center">
				<br><br><br>
				<div id="myC" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="myC" data-slide-to="0" class="active"></li>
						<li data-target="myC" data-slide-to="1"></li>
						<li data-target="myC" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active" style="height: 580px">
							<br>
							<div class="circle" style>
								<img src="img/graph.png" width="100%">
							</div><br><br><br><br><br><br>
							<div class="carousel-caption">
								<h3>Welcome to MY Site</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
						<div class="item" style="height: 480px">
							<div class="circle">
								<img src="img/graph.png" width="100%">
							</div><br><br><br><br><br><br>
							<div class="carousel-caption">
								<h3>Welcome to MY Site</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
						<div class="item " style="height: 480px">
							<div class="circle">
								<img src="img/graph.png" width="100%">
							</div><br><br><br><br><br><br>
							<div class="carousel-caption">
								<h3>Welcome to MY Site</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
					</div>
				</div>-->
			</div>
			<div class="col-sm-offset-1 col-sm-6 con2" >
				<h1 class="red" style="margin-top: 10px"><span class="glyphicon glyphicon-lock"></span>Register</h1>
				<div style="width:200px ;height:4px;background-color:red;"></div>
				<div style="width:100% ;height:2px;background-color:white;"></div>	
				<form method="" action="" class="form-horizontal">
					<br>
					<div class="form-group">
						<div class="col-sm-3">
							<label class="control-label">Name</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" placeholder="Name" name="user_id" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
							<label  class="control-label">Contact Number</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" placeholder="Conatact number" name="conatact_no" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
							<label  class="control-label">Email</label>
						</div>
						<div class="col-sm-8">
							<input type="mail" class="form-control" placeholder="Email" name="email" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
							<label  class="control-label">Password</label>
						</div>
						<div class="col-sm-8">
							<input type="password" class="form-control" placeholder="Password" name="password" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
							<label  class="control-label">Conform Password</label>
						</div>
						<div class="col-sm-8">
							<input type="password" class="form-control" placeholder=" Conform Password" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
						<label  class="control-label">Pin</label>
						</div>
						<div class="col-sm-8">
							<input type="number" class="form-control" placeholder="pin" name="pin" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
							<label class="control-label">District</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control" required="" name="district">
									<option>--select State--</option>
									<option value="karnataka">Mysuru</option>
									<option value="Kerala">Bangaluru</option>
									<option value="Tamilnadu">Tumkur</option>
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
					<div class="form-group">
						<div class="col-sm-3">
							<label class="control-labelt">Secret question</label>
						</div>
						<div class="col-sm-8">
							<select class="form-control" required="" name="secret_question">
									<option>--select secret question--</option>
									<option value="Mysuru">Vehicle number</option>
									<option value="Bangaluru">Home door number</option>
									<option value="Hassan">Color</option>
							</select><br>
						</div>
						
					</div>
					<div class="form-group">
						<div class="col-sm-3">
							<label  class="control-label">Answer</label>
						</div>
						<div class="col-sm-8">
							<input type="password" class="form-control" placeholder="your Answer" name="answewr" required>
						</div>
					</div>
					<div align="center">
						<div class="form-group">
							<input type="checkbox" name="" class="chk">I agree all statements in <z class="red">Terms and Conditions</z>
						</div>
						<div class="form-group">
							<button class="btn btn-danger ">REGISTER</button>
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