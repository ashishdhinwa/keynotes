<?php
require "includes/connection_with_database.php";
?>
<DOCTYPE html>
<html>
   <head>
   <title>Sign Up</title>
   <meta charset="UTF-8">
   <meta name="description" content="Study Notes,Practical Files and Question papers">
   <meta name="keywords" content="Notes,Files,Key notes">
   <meta name="author" content="Ashish Dhinwa">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script type="text/javascript" src="js/index.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/signup.css">
		<link rel="stylesheet" href="css/login2.css">
		
  </head>
  <body>
  <div>
 <div class="container" > <strong><h1 style="color:#73FF4A;float:left;"><div id="foo2">Key Notes</div></h1></strong></div>
 <div class="container" > <strong><h1 style="color:#73FF4A;float:right;position:relative;bottom:80px;"><div id="foo1">Key Notes</div></h1></strong></div>        
  </div>
           <div class="loginBox">
			<img id="logo" src="user.png" class="user">
			<center><h3 style="margin-top:-40px;color: red;margin-bottom:20px;" id="foo3">Key Notes</h3></center>
			<h2>Sign Up Here</h2>
			<form action="signup_script.php" method="post">
				<input type="text" name="fullname" placeholder="Full Name" required></input>
				 <?php
							  
						    
							  if(!empty($_SESSION['error_in_name'])){
							 ?>
						      <h5 style="color:red;"><?php echo $_SESSION['error_in_name'];?></h5>	<?php

                                unset($_SESSION['error_in_name']);}?>		
				
				<input type="email" name="email_of_user" placeholder="Email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required></input>
                 <?php
							  
						    
							  if(!empty($_SESSION['error_in_email'])){
							 ?>
						      <h5 style="color:red;"><?php echo $_SESSION['error_in_email'];?></h5>	<?php

                                unset($_SESSION['error_in_email']);}?>				
				<?php
							  
						    
							  if(!empty($_SESSION['email_exist'])){
							 ?>
						      <h5 style="color:red;"><?php echo $_SESSION['email_exist'];?></h5>	<?php

                                unset($_SESSION['email_exist']);}?>
				<input type="password" name="password" placeholder="Password" required></input>
			    <?php
							  
						    
							  if(!empty($_SESSION['pass_length'])){
							 ?>
						      <h5 style="color:red;"><?php echo $_SESSION['pass_length'];?></h5>	<?php

                                unset($_SESSION['pass_length']);}?>
				
				
				<input type="password" name="re_password" placeholder="Re-enter Password" required></input>
				<?php
							  
						    
							  if(!empty($_SESSION['didnot_match'])){
							 ?>
						      <h5 style="color:red;"><?php echo$_SESSION['didnot_match'];?></h5>	<?php

                                unset($_SESSION['didnot_match']);}?>
				
				<input type="text" name="city" placeholder="City" required></input>
				
				
				
				
				
				
				
				
				
				<input type="submit" name="submit" value="Sign Up"></input>
			</form>
		</div>
</div>	
                           
                        </div>
                    </center>
                </div>
            </div>
			</body>
  </html>