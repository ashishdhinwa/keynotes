<?php
require "includes/connection_with_database.php";
?>
<DOCTYPE html>
<html>
   <head>
   <title>Log in</title>
   <meta charset="UTF-8">
   <meta name="description" content="Study Notes,Practical Files and Question papers">
   <meta name="keywords" content="Notes,Files,Key notes">
   <meta name="author" content="Ashish Dhinwa">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
		 
		  <!--Preloader-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
         <link rel="stylesheet" href="cssspin/css/style.css">
	     <script src="cssspin/js/index.js"></script>
		 <!--Preloader-->
		 
		 
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script type="text/javascript" src="js/index.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/login2.css">
       
       	 <!--FB_LIKE&SHARE_script-->
			  <?php
			  include "includes/likeshare_script.php";
			  ?>
			  <!--FB_LIKE&SHARE-->	   

 </head>
  <body background="pictures/fullbanner.jpg">
   <?php
  include "includes/wrapper.php";
  ?>
  <div id="content">
 
  <div>
 <div class="container" > <strong><h1 style="color:#73FF4A;float:left;"><div id="foo2">Key Notes</div></h1></strong></div>
 <div class="container" > <strong><h1 style="color:#73FF4A;float:right;position:relative;bottom:80px;"><div id="foo1">Key Notes</div></h1></strong></div>        
  </div>
         
     		<div class="loginBox">
			<img id="logo" src="user.png" class="user">
			<center><h3 style="margin-top:-40px;color: red;margin-bottom:20px;" id="foo3">Key Notes</h3></center>
			<h2 style="margin-top:-15px;">Log In Here</h2>
			
			<form action="login_script.php" method="post">
				<p>Email</p>
				<input type="email" name="email_of_user" placeholder="Enter Email" required>	
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••" required>
				 <?php
							  
						    
							  if(!empty($_SESSION['password_not_matching'])){
							 ?>
						      <h5 style="color:red;"><?php echo $_SESSION['password_not_matching'];?></h5>	<?php

                                unset($_SESSION['password_not_matching']);}?>
				 <?php
							  
						    
							  if(!empty($_SESSION['doesnt_exist'])){
							 ?>
						      <h5 style="color:red;"><?php echo $_SESSION['doesnt_exist'];?></h5>	<?php

                                unset($_SESSION['doesnt_exist']);}?>				
				
				<input type="submit" name="" value="Log In">
				<a href="forgot_password.php">Forgot Password?</a>
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
			  <script  src="cssspin/js/index.js"></script>
  </html>