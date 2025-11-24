<?php $dbhost ='localhost:3306';
$dbuser = 'root';
$dbpwd = '';
$dbname = 'servicespot';
$con=mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname);
if(!$con)
{
	die(mysqli_error($con));
}