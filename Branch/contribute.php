<?php
include "../includes/connection_with_database.php";
if(!isset($_SESSION['email_of_user']))
    {	
    header('location:../login.php');
    exit();
	}
if(!empty($_SESSION['succesfully_set'])){
	?>
	<script>alert ("Password resetting successful");</script>
	<?php
	unset($_SESSION['succesfully_set']);
}
						  if(!empty($_SESSION['succesfully_changed'])){
							 ?>
							 <script>
							 alert("Passwords Changed Successfully.");
							 </script>
						     	<?php
                                unset($_SESSION['succesfully_changed']);}
?>


<DOCTYPE html>
<html>
   <head>
   <title>Contribute</title>
   <meta charset="UTF-8">
   <meta name="description" content="Study Notes,Practical Files and Question papers">
   <meta name="keywords" content="Notes,Files,Ready_go_study">
   <meta name="author" content="Ashish Dhinwa">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

		
		
		 <!--Preloader-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
         <link rel="stylesheet" href="../cssspin/css/style.css">
	     <script src="../cssspin/js/index.js"></script>
		 <!--Preloader-->
		 
		 
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
		
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/index1_for_contribute_only.css">
		<link rel="stylesheet" type="text/css" href="../css/programs.css">
	    <link href="../css/style.css" rel="stylesheet" type="text/css">
  
  
  <!--FB_LIKE&SHARE_script-->
  <?php
  include "../includes/likeshare_script.php";
  ?>
  <!--FB_LIKE&SHARE-->
  
  
  </head>
   
<body>
  <?php
  include "../includes/wrapper.php";
  ?>
  <div id="content">
 <!--Navigation bar-->
  <nav class="nav navbar-inverse navbar-absolute-top" style="min-height:70px;position: absolute; top: 0px; width: 100%;z-index:50;">
  
  <div class="container" style="margin-top:10px;">
 
 <div class="navbar-header" style="margin-left:-29px;">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
				        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                </button> 
				<img src="../pictures/logo2.jpg" style="max-height:60px;max-width:60px;border-style:solid;border-radius:100%;position:relative;right:210px;bottom:5px;"></img><a href="index.php" class="navbar-brand" style="font-size:24px;color:#FF5733;margin-left:15px;">&nbsp;Key Notes</a>
                </div>
	<div class="collapse navbar-collapse" id="myNavbar">
	 <ul class="nav navbar-nav navbar-left" >
	 <li><a href="../index.php" style="cursor: pointer; font-size:16px;"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
	 <li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer; font-size:16px;"><span class="glyphicon glyphicon-th-list" ></span>&nbsp;Branch<span class="caret"></span></a>
	<ul class="dropdown-menu">
          <li><a href="cs.php">Computer Science</a></li>
		  <li><a href="ece.php">Electrionics & Comm. Engg.</a></li>
		  <li><a href="mechanical.php">Mechanical Engineering</a></li>
		  <li><a href="civil.php">Civil Engineering</a></li>
		  <li><a href="chemical.php">Chemical Engineering</a></li>         
		   <li><a href="electrical.php">Electrical Engineering</a></li>
        </ul>
	</li>
	
	 <li class="dropdown">
	 <!--MAKE A PAGE OF ALL DSA PROGRAMS LISTED AND THEN USING SAME PAGE LINKS CONNECT THE DIFFERENT LINKS OF DROPDOWN MENU-->
	  <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;font-size:15px;"><i class="fa fa-desktop"></i></span>&nbsp;Scheme & Syllabus<span class="caret"></span></a>
	<ul class="dropdown-menu">
         <li><a href="cs.php#cssyllabus">Computer Science</a></li>
		  <li><a href="ece.php#ecesyllabus">Electrionics & Comm. Engg.</a></li>
		  <li><a href="mechanical.php#mechanicalsyllabus">Mechanical Engineering</a></li>
		  <li><a href="civil.php#civilsyllabus">Civil Engineering</a></li>
		  <li><a href="chemical.php#chemicalsyllabus">Chemical Engineering</a></li>  
           <li><a href="electrical.php#electricalsyllabus">Electrical Engineering</a></li>  		  
        </ul>
	</li>
     
	  <li><a href="contribute.php" style="cursor: pointer; font-size:16px;"><span class="glyphicon glyphicon-circle-arrow-up"></span>&nbsp;Contribute</a></li>
	</ul>
	
	<ul class="nav navbar-nav navbar-right">
	                    
                        <li><a href="../settings.php" style="font-size:15px;"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                        <li><a href="../logout.php" style="font-size:15px;"><span class="glyphicon glyphicon-log-in"></span>Log Out</a></li>
	</ul>
  </div>
  
  </div>
</nav>
  
  <!--Navigation bar ends here-->
  
   <!--FB_LIKE&SHARE-->
     <?php
	 include "../includes/likeshare_button.php";
	 ?>
    <!--FB_LIKE&SHARE-->
  

 

   <div id="content1">
            <!--Main banner image-->
            <div id = "banner_image">
			 <hr>
			 <hr style="margin-bottom:50px;">
			 
          <center><h2><b>CONTRIBUTE</b></h2>  </center>
            <center><h4 style="margin-bottom:-30px;">Help people find more material.</h4>  </center>
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h3>Upload your content & help people find more<br></h3>
							<h3 style="display:block;">(images,pdf,ppt,etc.)</h3>
							<form enctype="multipart/form-data" action="../upload_file.php" method="post">
							

								<div class="file-upload" style="width:85%;">
								<div class="file-select">
								<div class="file-select-button" id="fileName">Choose File</div>
								<div class="file-select-name" id="noFile">No file chosen...</div> 
								<input type="file" name="file" id="chooseFile"></input>
								</div>
							  	</div>
								<?php
								
							       if(!empty($_SESSION['error_in_upload'])){
							 ?>
						      <h4 style="color:red;font-size:15px;"><b><?php echo $_SESSION['error_in_upload'];?></b></h4>	<?php

                                unset($_SESSION['error_in_upload']);}?>
								<?php
								
							       if(!empty($_SESSION['upload_success'])){
							 ?>
						      <h4 style="color:green;font-size:15px;"><b><?php echo $_SESSION['upload_success'];?></b></h4>	<?php

                                unset($_SESSION['upload_success']);}?>
		                       <input class="form-control" type="text" name="description" placeholder="Description of file" style="display:block;width:85%;margin-top:10px;" required></input>					
							<input style="margin-top:15px;"type="submit" class="btn btn-danger btn-lg active" value="Upload"></input>
							
							</form>
                         
                           
                        </div>
                    </center>
                </div>
            </div>
			</div>
  
 
  
  <div class="container-fluid">
 <hr>
 <hr>
  </div>
  
  
  <?php
  include "../includes/footer.php";
  ?>
  </div>
</body>
	<script src="../js/cont.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	 <script  src="../cssspin/js/index.js"></script>
</html>