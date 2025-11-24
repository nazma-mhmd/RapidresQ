
<?PHP
    include("config.php");
	$sc_name=$_POST['sc_name'];
	$password=$_POST['password'];
	$reg_no=$_POST['reg_no'];
	$since=$_POST['since'];
	$phone_no=$_POST['phone_no'];
	$mobile_no=$_POST['mobile_no'];
	$email=$_POST['email'];
	$district=$_POST['district'];
	$landmark=$_POST['landmark'];
	$pin=$_POST['pin'];
	$address=$_POST['address'];
	$about=$_POST['about'];
	$service=$_POST['service'];
	$photo=$_POST['photo'];
	$date=date("Y/m/d");

	$insertQuery="insert into sc(sc_name,password,reg_no,since,phone_no,mobile_no,email,district,landmark,pin,address,about,service,photo,date) values('$sc_name','$password','$reg_no','$since','$phone_no','$mobile_no','$email','$district','$landmark','$pin','$address','$about','$service','$photo','$date')";
	$res = mysqli_query($con,$insertQuery);
	if(!$res)
	{
		die(mysqli_error($con));
	}
	else 
	{
		echo '<script type="text/javascript">alert("applied for approval"); window.location=\'http://localhost/Project%20Service/index.php\';</script>';
	}

?>

