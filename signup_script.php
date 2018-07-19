<?php
//CHECK FOR PATTERNS-length,format,already existing situation,etc.
require "includes/connection_with_database.php";
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$email=mysqli_real_escape_string($con,$_POST['email_of_user']);



if(!preg_match($regex_email,$email))
{
	$_SESSION['error_in_email']="Enter correct email id";
	header('location:signup.php');
	exit();
}




$fetch_query="SELECT email_id FROM users WHERE email_id='$email'";
$run_query=mysqli_query($con,$fetch_query) or die(mysqli_error($con));
if(mysqli_num_rows($run_query)>0)
{
	$_SESSION['email_exist']="Email already exist";
	header('location:signup.php');
	exit();
}





$name=mysqli_real_escape_string($con,$_POST['fullname']);
if($name[0]>0&&$name[0]<=9)
{
	$_SESSION['error_in_name']="Enter correct name";
	header('location:signup.php');
	exit();
}



$password=mysqli_real_escape_string($con,$_POST['password']);
if(strlen($password)<6)
{
	$_SESSION['pass_length']="Password must be 6 characters long";
	header('location:signup.php');
	exit();
}

$re_enter_password=mysqli_real_escape_string($con,$_POST['re_password']);
if($password!=$re_enter_password)
{
	$_SESSION['didnot_match']="Passwords not matching";
	header('location:signup.php');
	exit();
}

	//SENDING A VERIFICATION CODE TO USER-->
				
				$code=rand(10000,100000);
				$_SESSION['verification_code']=$code;
				
				$to=mysqli_real_escape_string($con,$email]);
				$subject="Confirmation Code For keynotes.tk";
				$from = 'keynotes.tk@gmail.com';
			    $body='Your Confirmation Code is '.$code;
                $headers = "From:".$from;
				mail($to,$subject,$body,$headers);
				
				
				
				
$_SESSION['city']=mysqli_real_escape_string($con,$_POST['city']);
$_SESSION['encrypt']=md5($password);
$_SESSION['send_email_to_verification_only']=$email;
$_SESSION['name_of_user']=$name;
header('location:verification.php');









?>