<?php
require "includes/connection_with_database.php";
if(!isset($_SESSION['email_of_user']))
    {	
    header('location:login.php');
    exit();
	}
?>
<DOCTYPE html>
<html>
   <head>
   <title>Change Password</title>
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
        
         	 			

 </head>
  <body>
    <?php
  include "includes/wrapper.php";
  ?>
  <div id="content">
  
  <div class="container" > <strong><h1 style="color:#73FF4A;float:left;"><div id="foo2">Key Notes</div></h1></strong></div>
 <div class="container" > <strong><h1 style="color:#73FF4A;float:right;position:relative;bottom:80px;"><div id="foo1">Key Notes</div></h1></strong></div>
          
		  <div class="loginBox">
			<img id="logo" src="user.png" class="user">
			<center><h3 style="margin-top:-40px;color: red;margin-bottom:20px;" id="foo3">Key Notes</h3></center>
			<h2 style="margin-top:-15px;">Change Password</h2>
			<form action="settings_script.php" method="post">
				<input type="password" name="old_password" placeholder="Old passsword" required>	
				<?php
							  
						    
							  if(!empty($_SESSION['Old_password_incorrect'])){
							 ?>
						      <h5 style="color:red;"><?php echo  $_SESSION['Old_password_incorrect'];?></h5>	<?php

                                unset($_SESSION['Old_password_incorrect']);}?>
				<input type="password" name="new_password" placeholder="Enter new password" required>
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
				
								
				<input type="submit" name="" value="Change Password">
				<hr/ style="margin-top:2px;margin-bottom:2px;">
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