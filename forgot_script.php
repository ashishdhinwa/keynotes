<?php //SENDING A VERIFICATION CODE TO USER-->
incldue 'includes/connection_with_database.php';
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$email=mysqli_real_escape_string($con,$_POST['email_of_user']);



if(!preg_match($regex_email,$email))
{
	$_SESSION['error_in_email']="Enter correct email id";
	header('location:forgotpassword.php');
	exit();
}




$fetch_query="SELECT email_id FROM users WHERE email_id='$email'";
$run_query=mysqli_query($con,$fetch_query) or die(mysqli_error($con));
if(mysqli_num_rows($run_query)>0)
{
		//SENDING A VERIFICATION CODE TO USER-->
				
				$code=rand(10000,100000);
				$_SESSION['verification_code']=$code;
				
				$to=mysqli_real_escape_string($con,$email]);
				$subject="Confirmation Code For keynotes.tk";
				$from = 'keynotes.tk@gmail.com';
			    $body='Your new password is '.$code;
				$_SESSION['resetting']='Your new password is sent to your registered mail id';
                $headers = "From:".$from;
				mail($to,$subject,$body,$headers);
	            header('location:login.php');
	            
}
            ?>