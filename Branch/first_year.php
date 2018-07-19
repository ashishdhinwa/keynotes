<?php
include "../includes/connection_with_database.php";
if(!isset($_SESSION['email_of_user']))
    {	
    header('location:login.php');
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
   <title>B.Tech. First year</title>
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
		<link rel="stylesheet" type="text/css" href="../css/index1.css">
  
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
  
  
 <?php
include "../includes/header2.php";
?>
  
  
  
   <!--FB_LIKE&SHARE-->
     <?php
	 include "../includes/likeshare_button.php";
	 ?>
    <!--FB_LIKE&SHARE-->
  
  
  
  
  
  
  
 
  <?php
  include "../includes/fetchname_to_print.php";
  ?> <h5 style="margin-top:-5px;margin-bottom:-5px;font-size:15px;"><i><b>B.Tech first year</b></i></h5>
  </center>
  <hr>
  
   <div class="container-fluid" style="width:95%;">
   <h5 style="color:green;margin-bottom:-10px;font-style:italic;"><strong>CHEMISTRY SEMESTER</strong></h5>
   <hr  style="height:1px;border:none;color:#333;background-color:#333;">
   <div class="row">
	  <div class="col-lg-4">
	  <a href="programs.php">
	  <div class="thumbnail">
		<img src="../gif/computer.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Computer Science and Programming</strong></h5>
		</div>
		</a>
	   </div>
	   
	    <div class="col-lg-4">
	 	  <a href="../Final_page/firstyear/bme.php">
	 <div class="thumbnail">
		<img src="../gif/mechanical1.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Basic Mechanical Engineering</strong></h5>
		</div>
		</a>
	   </div>
	    <div class="col-lg-4">
		 <a href="../Final_page/firstyear/math1.php">
	  <div class="thumbnail">
		<img src="../gif/gt.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Mathematics I</strong></h5>
		</div>
		</a>
	   </div>
   </div>
   <hr/>
   <div class="row">
    <div class="col-lg-4">
	 <a href="../Final_page/firstyear/void.php">
	  <div class="thumbnail">
		<img src="../gif/chemical3.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;Chemistry</strong></h5>
		</div>
		</a>
	   </div>
	    <div class="col-lg-4">
		 <a href="../Final_page/firstyear/basiceconomics.php">
	  <div class="thumbnail">
		<img src="../gif/eco1.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Basic Economics</strong></h5>
		</div>
		</a>
	   </div>
	    <div class="col-lg-4">
		 <a href="../Final_page/firstyear/void.php">
	  <div class="thumbnail">
		<img src="../gif/dsa1.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Computer Aided Engineering Drawing</strong></h5>
		</div>
		</a>
	   </div>  
   </div>
   <hr/>
   <div class="row">
    <div class="col-lg-4">
	 <a href="../Final_page/firstyear/void.php">
	  <div class="thumbnail">
		<img src="../gif/ese.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;Environmental Science and Ecology</strong></h5>
		</div>
		</a>
	   </div> 
   </div>
   <hr/>
   
<br/>	   
 <h5 style="color:green;margin-bottom:-10px;font-style:italic;"><strong>C PROGRAMMING CODES</strong></h5>
 
     <hr  style="height:1px;border:none;color:#333;background-color:#333;">
	  <div class="row">
	  <div class="col-lg-4">
	  <div class="thumbnail codes">
		<img src="../pictures/coder.png" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;<a href="../Branch/programs.php" >Arrays,&nbsp;</a><a href="../Branch/programs.php" >Linked List,&nbsp;</a>
		<a href="../Branch/programs.php#stack_queue" id="staccck">Stack,</a><a href="../Branch/programs.php#stack_queue" >Queue,</a><a href="../Branch/programs.php#stack_queue" >Recursion</a></strong></h5>
		</div>
	   </div>
	   
	    <div class="col-lg-4">
	  <div class="thumbnail codes">
		<img src="../pictures/coder.png" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>
		<a href="../Branch/programs.php#trees">Trees,&nbsp;</a><a href="../Branch/programs.php#graphs" >Graphs,&nbsp;</a>
		<a href="../Branch/programs.php#trees" id="staccck">Sorting,</a><a href="../Branch/programs.php#graphs" >Searching & Hashing</a></strong></h5>
		</div>
	   </div>
	    <div class="col-lg-4">
	  <div class="thumbnail codes">
		<img src="../pictures/coder.png" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Demo Programs for</strong></h5>
		<h5><a href="../Branch/programs.php#demo_t" id="staccck">Trees,</a><a href="../Branch/programs.php#demo_g" >Graph,</a><a href="../Branch/programs.php#demo_s" >Sorting</a></h5>
		</div>
	   </div>
   </div>
   <hr/>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   <!--Physics semester starts here-->
  
<br/>	   
 <h5 style="color:green;margin-bottom:-10px;font-style:italic;"><strong>PHYSICS SEMESTER</strong></h5>
 
     <hr  style="height:1px;border:none;color:#333;background-color:#333;">
   
    <div class="row">
	  <div class="col-lg-4">
	  <a href="../Final_page/firstyear/basicelectronics.php">
	  <div class="thumbnail">
		<img src="../gif/edc.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Basic Electronics Engineering</strong></h5>
		</div>
		</a>
	   </div>
	   
	    <div class="col-lg-4">
	 	  <a href="../Final_page/firstyear/basicelectrical.php">
	 <div class="thumbnail">
		<img src="../gif/electrical.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Basic Electrical Engineering</strong></h5>
		</div>
		</a>
	   </div>
	    <div class="col-lg-4">
		 <a href="../Final_page/firstyear/math2.php">
	  <div class="thumbnail">
		<img src="../gif/gt.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Mathematics II</strong></h5>
		</div>
		</a>
	   </div>
   </div>
   <hr/>
       <div class="row">
	  <div class="col-lg-4">
	  <a href="../Final_page/firstyear/physics.php">
	  <div class="thumbnail">
		<img src="../gif/physics.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Physics</strong></h5>
		</div>
		</a>
	   </div>
	   
	    <div class="col-lg-4">
	 	  <a href="../Final_page/firstyear/void.php">
	 <div class="thumbnail">
		<img src="../gif/tech.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Technical Communication</strong></h5>
		</div>
		</a>
	   </div>
   </div>
   <hr>
   <h5 style="color:green;margin-bottom:-10px;font-style:italic;"><strong>SCHEME & SYLLABUS</strong></h5>
 
     <hr  style="height:1px;border:none;color:#333;background-color:#333;">
   
    <div class="row">
	  <div class="col-lg-4">
	  <a href="https://drive.google.com/file/d/1dqidKz2pF1soFGLGApQlASiJ-X9ZjJGH/view?usp=sharing">
	  <div class="thumbnail">
		<img src="../gif/syllabus.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Syllabus</strong></h5>
		</div>
		</a>
	   </div>
   </div>
   <hr/>
   
   
   
   </div>
 <?php
  include "../includes/footer.php";
  ?>
  </div>
</body>
    <script  src="../cssspin/js/index.js"></script>
</html>