<?php
require "includes/connection_with_database.php";

$email=mysqli_real_escape_string($con,$_POST['registered_email_of_user']);
$fetch="SELECT email_id FROM users WHERE email_id='$email'";
$run_fetch=mysqli_query($con,$fetch) or die(mysqli_error($con));
if(mysqli_num_rows($run_fetch)==0)
{
    $_SESSION['Not_exist']="No such user exist";
    header('location:forgot_password.php');
    exit();	
}
else
{
	$password=mysqli_real_escape_string($con,$_POST['password']);
	if(strlen($password)<6)
{
	$_SESSION['pass_length1']="Password must be atleast 6 characters long";
	echo "ardc";
	header('location:forgot_password.php');
	exit();
}
	$re_password=mysqli_real_escape_string($con,$_POST['re_password']);
	if($password!=$re_password)
	{
		$_SESSION['Not_matching']="New passwords not matching";
		header('location:forgot_password.php');
        exit();		
	}
	else{
		$encrypt=md5($password);
		$insert="UPDATE users SET password='$encrypt' WHERE email_id='$email'";
		$run_query=mysqli_query($con,$insert) or die(mysqli_error($con));
		$_SESSION['email_of_user']=$email;
		$_SESSION['user_id']=mysqli_insert_id($con);
		$_SESSION['succesfully_set']="Password reset successful";
		header('location:index.php');
		
	}
	
}

?>