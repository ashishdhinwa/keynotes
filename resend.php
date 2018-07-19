<?php
//SENDING A VERIFICATION CODE TO USER-->
				
				$code=rand(10000,100000);
				unset($_SESSION['verification_code']);
				$_SESSION['verification_code']=$code;
				$email=$_SESSION['send_email_to_verification_only'];
				$to=mysqli_real_escape_string($con,$email]);
				$subject="Confirmation Code For keynotes.tk";
				$from = 'keynotes.tk@gmail.com';
			    $body='Your Confirmation Code is '.$code;
                $headers = "From:".$from;
				mail($to,$subject,$body,$headers);
				header('location:verification.php');
?>