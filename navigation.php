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
							<li><a href="register_page.html" >Register</a></li>
							<li><a href="Packages.php">Packages</a></li>
							<li><a href="#">About us</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#modlogin" data-toggle="modal"  >Login</a></li>
						</ul>
					</div>
				</div>
				<div id="modlogin" class="modal animated slideInDown fade" >
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close" data-dismiss="modal">&times</button>
								<h1 class="modal-title" align="center">Login form</h1>
							</div>
							<div class="modal-body">
								<form method="" action="" class="form">
									<div class="form-group input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
										</span>
										<input type="text" class="form-control" placeholder="Enter your UserName">
									</div>
									<div class="form-group input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-lock"></i>
										</span>
										<input type="text" class="form-control" placeholder="Enter your Password">
									</div>
									<div class="form-group" >
										<select class="form-control">
											<option>--select--</option>
											<option>Admin</option>
											<option>User</option>
										</select>
									</div>
									<div class="form-group">
										<a class="btn btn-success btn-block" href="profile.html">Submit</a>
									</div>
								</form>
								<div align="center">
									Don't have an account <a href="register.php">Register here</a>
								</div>
							</div>
							
						</div>
					</div>
				</div>