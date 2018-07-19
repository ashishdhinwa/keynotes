<?php
include "includes/connection_with_database.php";
$sent_code=$_POST['verification_code'];
if($_SESSION['verification_code']==$sent_code)
{
	$city=$_SESSION['city'];
	$encrypt=$_SESSION['encrypt'];
	$email=$_SESSION['send_email_to_verification_only'];
	$name=$_SESSION['name_of_user'];
	
	
	$insert_query="INSERT into users (name,email_id,password,city) values('$name','$email','$encrypt','$city')" or die($insert_query);
    $insert_query_result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
	$_SESSION['user_id']=mysqli_insert_id($con);
    $_SESSION['email_of_user']=$email;
	
	unset($_SESSION['city']);
    unset($_SESSION['encrypt']);
	unset($_SESSION['send_email_to_verification_only']);
	unset($_SESSION['name_of_user']);
    
	header('location:index.php');
}
else
{
 
 $_SESSION['incorrect_code']='Incorrect code';
 header('location:verification.php');
}

?>