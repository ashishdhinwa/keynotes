<?php
require "includes/connection_with_database.php";
?>
<DOCTYPE html>
<html>
   <head>
   <title>Verify your email</title>
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
			<img id="logo" src="user.png" class="user">	</img>					
			<center><h3 style="margin-top:-40px;color: red;margin-bottom:20px;" id="foo3">Key Notes</h3></center>
			<h2>Verify Your Email</h2>
			<form action="verification_script.php" method="post">
				<input class="form-control" type="number" name="verification_code" placeholder="Enter verification code" required></input>
				<?php
							  
						    
							  if(!empty($_SESSION['incorrect_code'])){
							 ?>
						      <h5 style="color:red;"><?php echo $_SESSION['incorrect_code'];?></h5>	<?php

                                unset($_SESSION['incorrect_code']);}?>		
								
				<input type="submit" name="submit" value="Verify"></input>
				<h4>Resend code</h4>
			</form>
		</div>
</div>	
                           
                        </div>
                    </center>
                </div>
            </div>
			</body>
  </html>