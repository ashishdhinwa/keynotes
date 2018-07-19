<?php
require "includes/connection_with_database.php";
if(!isset($_SESSION['email_of_user']))
{
	header('location:login.php');
	exit();
}

$email=$_SESSION['email_of_user'];
$password=mysqli_real_escape_string($con,$_POST['old_password']);
$encrypt=md5($password);

$fetch="SELECT * FROM users WHERE password='$encrypt'";
$run_fetch=mysqli_query($con,$fetch) or die(mysqli_error($con));
if(mysqli_num_rows($run_fetch)==0)
{
	$_SESSION['Old_password_incorrect']="Incorrect Old Password";
	header('location:settings.php');
	exit();
}

$new_password=mysqli_real_escape_string($con,$_POST['new_password']);

	if(strlen($new_password)<6)
{
	$_SESSION['pass_length1']="Password must be atleast 6 characters long";
	header('location:settings.php');
	exit();
}

	$re_password=mysqli_real_escape_string($con,$_POST['re_password']);
	if($new_password!=$re_password)
	{
		$_SESSION['Not_matching']="New passwords not matching";
		header('location:settings.php');
        exit();		
	}
	
	else{
		$encrypt1=md5($new_password);
		$insert="UPDATE users SET password='$encrypt1' WHERE email_id='$email'";
		$run_query=mysqli_query($con,$insert) or die(mysqli_error($con));
		$_SESSION['email_of_user']=$email;
		$_SESSION['user_id']=mysqli_insert_id($con);
		$_SESSION['succesfully_changed']="Password changed successful";
		header('location:index.php');
		
	}
	


?>