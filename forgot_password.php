<?php
require "includes/connection_with_database.php";
?>
<DOCTYPE html>
<html>
   <head>
   <title>Reset Password</title>
   <meta charset="UTF-8">
   <meta name="description" content="Study Notes,Practical Files and Question papers">
   <meta name="keywords" content="Notes,Files,Key notes">
   <meta name="author" content="Ashish Dhinwa">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/signup.css">
  </head>
  <body>
 <div class="container"> <strong><h1>Key Notes</h1></strong></div>
         

			
		<div class="loginBox">
			<img id="logo" src="user.png" class="user">
			<h2 style="margin-top:-15px;">Reset Your Password</h2>
			<form action="forgot_password_script.php" method="post">
				<input type="email" name="registered_email_of_user" placeholder="Enter Registered Email Id" required>	
				<?php
							  
						    
							  if(!empty($_SESSION['Not_exist'])){
							 ?>
						      <h5 style="color:red;"><?php echo  $_SESSION['Not_exist'];?></h5>	<?php

                                unset($_SESSION['Not_exist']);}?>
				<input type="password" name="password" placeholder="Enter new password" required>
		         <?php
							  
						    
							  if(!empty($_SESSION['pass_length1'])){
							 ?>
						      <h5 style="color:red;"><?php echo  $_SESSION['pass_length1'];?></h5>	<?php

                                unset($_SESSION['pass_length1']);}?>
				<input type="password" name="re_password" placeholder="Re-enter new password" required>
				<?php
							  
						    
							  if(!empty($_SESSION['Not_matching'])){
							 ?>
						      <h5 style="color:red;"><?php echo $_SESSION['Not_matching'];?></h5>	<?php

                                unset($_SESSION['Not_matching']);}?>				
				
				<input type="submit" name="" value="Log in">
				<hr/ style="margin-top:2px;margin-bottom:2px;">
				<p style="color:#32F5EF">Don't have an account?<a href="signup.php" style="color:#70F532;text-decoration:underline;">Register here</a></p>
			</form>
		</div>
</div>	
                           
                        </div>
                    </center>
                </div>
            </div>
			</body>
  </html>