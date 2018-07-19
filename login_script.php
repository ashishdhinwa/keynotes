<?php
require "includes/connection_with_database.php";

$email=mysqli_real_escape_string($con,$_POST['email_of_user']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$encrypt=md5($password);
$fetch_data="SELECT * FROM users WHERE email_id='$email' and password='$encrypt'";
$run_query=mysqli_query($con,$fetch_data) or die(mysqli_error($con));
if(mysqli_num_rows($run_query)==1)
{
	
	$_SESSION['email_of_user']=$email;
	$_SESSION['user_id']=mysqli_insert_id($con);
	header('location:index.php');
	exit();
}
else
{
	$fetch_email="SELECT email_id FROM users WHERE email_id='$email'";
	$run_query_email=mysqli_query($con,$fetch_email) or die(mysqli_error($con));
	if(mysqli_num_rows($run_query_email)==1)
{
	$_SESSION['password_not_matching']="Incorrect Password";
	header('location:login.php');
	exit();
}
else{
	
$_SESSION['doesnt_exist']="Invalid credientials";
	header('location:login.php');
	exit();
}
}











?>