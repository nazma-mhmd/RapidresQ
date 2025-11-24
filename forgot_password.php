<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
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
			background-image: url("img/unlock.webp");
			background-size: 100%;
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		.modal-content
		{
			background-color: rgba(255,255,255,0.8);
			color: ;
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
				<div class="navbar navbar-inverse p">
					<div class="navbar-header">
						<a href="#" class="navbar-brand">CARSPOT</a> 
						<button data-target="#navi"  data-toggle="collapse" class="navbar-toggle">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="navi">
						<ul class="nav navbar-nav y"  >
							<li class="active"><a href="#" >Home</a></li>
							<li><a href="#" >Cars</a></li>
							<li><a href="#">Listing</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.html" >Logout</a></li>
						</ul>
					</div>
				</div>	
			</div>
		</div>
			<div class="container"  >
				<div class="row" align="">
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<div class="modal-header">
								<h1>Forgot Password</h1>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-sm-4" style="margin-top: 20px;" align="center">
										<img src="img/user.jpg" width="80%" class="img-circle" ><br><br>
										<h1><B>_userId_</B></h1>
									</div>
									<div class="col-sm-8">	
										<form class="form" disabled>
											<div class="col-sm-12">
												<h2>Answer the Questions</h2>
												<div class=" form-group">
													<label class="control-label">Enter Your Mobile Number</label>
													<input type="text" class="form-control" id="name" value="" >
												</div><br>
									
												<div class="form-group">
													<label class="control-label">Enter Your Color</label>
													<input type="text" class="form-control" id="name" value="" >
												</div>
    										</div>
    										</div>
										</form>				
									</div>
								</div>
								<div class="modal-footer">
									<a class="btn btn-success btn-block btn-lg" href="#details" data-toggle="collapse">Submit Your Answer</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	

</body>
</html>