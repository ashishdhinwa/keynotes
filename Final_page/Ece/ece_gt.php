<?php
include "../../includes/connection_with_database.php";
if(!isset($_SESSION['email_of_user']))
    {	
    header('location:../../login.php');
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
   <title>Ece_Graph-Theory</title>
   <meta charset="UTF-8">
   <meta name="description" content="Study Notes,Practical Files and Question papers">
   <meta name="keywords" content="Notes,Files,Ready_go_study">
   <meta name="author" content="Ashish Dhinwa">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          
		  <!--Preloader-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
         <link rel="stylesheet" href="../../cssspin/css/style.css">
	     <script src="../../cssspin/js/index.js"></script>
		 <!--Preloader-->
		  
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../../css/index1.css">
		<link rel="stylesheet" type="text/css" href="../../css/individualsubjects.css">
  
         <!--FB_LIKE&SHARE_script-->
		 <?php
		 include "../../includes/likeshare_script.php";
		 ?>
		 <!--FB_LIKE&SHARE-->
		 
		 
  </head>
   
<body>
  <?php
  include "../../includes/wrapper.php";
  ?>
  <div id="content">
  
    <?php
  include "../../includes/header3.php";
  ?>
   
   <!--FB_LIKE&SHARE-->
     <?php
	 include "../../includes/likeshare_button.php";
	 ?>
    <!--FB_LIKE&SHARE-->
 
  <?php
  include "../../includes/fetchname_to_print.php";
  ?>
  <center><h5><b>Graph Theory</b></h5></center>
  <hr>
  
  <div class="container" style="width:90%;">
      <div class="row">
	      <div class="col-lg-4">
		     <div class="thumbnail" style="height:30%;">
			  <div class="dropdown" style="margin-top:-13px;">
    <button class="btn btn-primary btn-success dropdown-toggle" type="button" data-toggle="dropdown" style="width:100%;"><h4>Notes</h4>
    <span class="caret"></span></button>
    <ul class="dropdown-menu" style="width:100%;">
      <li><a href="https://drive.google.com/file/d/1T2WMiRDvNg3mNX8MkA0KF4mILVEY2qgh/view?usp=sharing">Notes</a></li>
	  <hr  style="height:1px;border:none;color:#333;background-color:#333;margin-top:2px;margin-bottom:3px;">
	   <li><a href="https://drive.google.com/file/d/1w2i7SL_lsuvJkC3tkluQXjR4CDNk79tv/view?usp=sharing">Quizzes</a></li>
	  <hr  style="height:1px;border:none;color:#333;background-color:#333;margin-top:2px;margin-bottom:3px;">
      <hr>
	  <hr>
    </ul>
  </div>
			 </div>
		
		  </div>
		  
		     <div class="col-lg-4">
		     <div class="thumbnail" style="height:30%;">
			  <div class="dropdown" style="margin-top:-13px;">
    <button class="btn btn-primary btn-success dropdown-toggle" type="button" data-toggle="dropdown" style="width:100%;"><h4>Practicals</h4>
     <?php include "../../includes/mnitonly.php"?>
	<span class="caret"></span></button>
    <ul class="dropdown-menu" style="width:100%;">
      <li><a href="#" style="color:red;">Sorry No Content Available Here</a></li>
	  <hr  style="height:1px;border:none;color:#333;background-color:#333;margin-top:1px;margin-bottom:2px;">
      <hr>
	  <hr>
    </ul>
  </div>
			 </div>
		  </div>
		     <div class="col-lg-4">
		     <div class="thumbnail" style="height:30%;">
			  <div class="dropdown" style="margin-top:-13px;">
    <button class="btn btn-primary btn-success dropdown-toggle" type="button" data-toggle="dropdown" style="width:100%;"><h4>Question Papers</h4>
     <?php include "../../includes/mnitonly.php"?>
	<span class="caret"></span></button>
    <ul class="dropdown-menu" style="width:100%;">
      <li><a href="https://drive.google.com/file/d/1JFxoCemRAobxGyxQwdlNwiPbm4QCDy4c/view?usp=sharing">Mid term-1 2013</a></li>
	  <hr  style="height:1px;border:none;color:#333;background-color:#333;margin-top:1px;margin-bottom:2px;">
        <li><a href="https://drive.google.com/file/d/1cjebbjBjBqL68O3xIIawvEZQyVudyDR4/view?usp=sharing">Mid term-1 2015</a></li>
	  <hr  style="height:1px;border:none;color:#333;background-color:#333;margin-top:1px;margin-bottom:2px;">
	    <li><a href="https://drive.google.com/file/d/1v7dj73KWat15jcuMzdrz3ScdbpFZGk1G/view?usp=sharing">Mid term-1 2016</a></li>
	  <hr  style="height:1px;border:none;color:#333;background-color:#333;margin-top:1px;margin-bottom:2px;">
	    <li><a href="https://drive.google.com/file/d/1mhn0WNu8gsyO5RBv-UUe8wAgRPUkvPFE/view?usp=sharing">Mid term-1 2017</a></li>
	  <hr  style="height:1px;border:none;color:#333;background-color:#333;margin-top:1px;margin-bottom:2px;">
	 <li><a href="https://drive.google.com/file/d/1S1hdqV576qebyOmqG5PxWOCiM4EIFJbj/view?usp=sharing">Mid term-2 2013</a></li>
	  <hr  style="height:1px;border:none;color:#333;background-color:#333;margin-top:1px;margin-bottom:2px;">
	   <li><a href="https://drive.google.com/file/d/1aSZQh_Tkxt806rcP0n-id-e2H25q9Lol/view?usp=sharing">Mid term-2 2015</a></li>
	  <hr  style="height:1px;border:none;color:#333;background-color:#333;margin-top:1px;margin-bottom:2px;">
	  <li><a href="https://drive.google.com/file/d/1Ql2eluaXoYaWDYL6Vz4ipU6ZgqxHML1E/view?usp=sharing">End term 2014</a></li>
	  <hr  style="height:1px;border:none;color:#333;background-color:#333;margin-top:1px;margin-bottom:2px;">
	   <li><a href="https://drive.google.com/file/d/1_PhESqtHOlvZdUZ4vtVnjv7NAyxiCw8u/view?usp=sharing">End term 2015</a></li>
	  <hr  style="height:1px;border:none;color:#333;background-color:#333;margin-top:1px;margin-bottom:2px;">
	   <li><a href="https://drive.google.com/file/d/1yteCSfVJ4eVIA6KG9oCVgjGvftaeBN2E/view?usp=sharing">End term 2016</a></li>
	  <hr  style="height:1px;border:none;color:#333;background-color:#333;margin-top:1px;margin-bottom:2px;">
	  
    </ul>
  </div>
			 </div>
		  </div>
	  </div>
  </div>
  <br>
  <br>
  <br>
  <center><h4 style="color:red;">We do not gurantee you for the 100% accuracy of the content available here.</h4></center>
   <?php
  include "ashish_dhinwa.php";
  ?>
  <br>
  <br>
 
  <br>
  
  <hr/>
  
  
  
  
  
  
  
  
  
  
  
  
  
  <?php
  include "../../includes/footer.php"
  ?>
  </div>
</body>
    <script  src="../../cssspin/js/index.js"></script>
</html>