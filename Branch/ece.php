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
   <title>Ece</title>
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
        <script src="../js/index.js"></script>
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
  ?>
  <h5 style="margin-top:-5px;margin-bottom:-5px;font-size:15px;"><i><b>Electronics & Communication Engineering</b></i></h5>
  </center>
  <hr>
  
   <div class="container-fluid" style="width:95%;">
   <center><h4 style="margin-bottom:0px;margin-top:0px;"><b> <a href="../Branch/first_year.php"><div id="foo">B.tech Fresher??Click here</div></h3></a></b></center>
   <hr>
   <h5 style="color:green;margin-bottom:-10px;font-style:italic;"><strong>SELECT  SUBJECT(3RD SEM)</strong></h5>
   <hr  style="height:1px;border:none;color:#333;background-color:#333;">
   <div class="row">
	  <div class="col-lg-4">
	  <a href="../Final_page/Ece/ece_edc.php">
	  <div class="thumbnail">
		<img src="../gif/edc.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Electronic Devices & Circuits</strong></h5>
		</div>
		</a>
	   </div>
	   
	    <div class="col-lg-4">
	 	  <a href="../Final_page/Ece/ece_nt.php">
	 <div class="thumbnail">
		<img src="../gif/electrical.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Network Theory</strong></h5>
		</div>
		</a>
	   </div>
	    <div class="col-lg-4">
		 <a href="../Final_page/Ece/ece_gt.php">
	  <div class="thumbnail">
		<img src="../gif/gt.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Graph Theory</strong></h5>
		</div>
		</a>
	   </div>
   </div>
   <hr/>
   <div class="row">
    <div class="col-lg-4">
	 <a href="../Final_page/Ece/ece_pmss.php">
	  <div class="thumbnail">
		<img src="../gif/pmss.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;Probabilistic Methods In Signals & Systems</strong></h5>
		</div>
		</a>
	   </div>
	    <div class="col-lg-4">
		 <a href="../Final_page/Ece/ece_stfa.php">
	  <div class="thumbnail">
		<img src="../gif/stfa.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Switching Theory & Finite Automata</strong></h5>
		</div>
		</a>
	   </div>
	    <div class="col-lg-4">
		 <a href="../Final_page/Ece/ece_dsa.php">
	  <div class="thumbnail">
		<img src="../gif/dsa1.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Data Structures & Algorithms</strong></h5>
		</div>
		</a>
	   </div>
	   
   </div>
   <hr/>
   <h5 style="color:green;margin-bottom:-10px;font-style:italic;"><strong>SCHEME & SYLLABUS
   </strong></h5>
   <h6 style="color:brown;margin-bottom:-10px;font-style:italic;"><strong>(Only for MNIT Jaipur students)
   </strong></h6>
   
    <hr  style="height:1px;border:none;color:#333;background-color:#333;">
    <div class="row">
	<div class="col-lg-4">
		 <a href="https://drive.google.com/file/d/1OxTawVkzXF4yikPLStZiBXUNGbFidk82/view?usp=sharing">
	  <div class="thumbnail">
		<img src="../gif/syllabus.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5 id="ecesyllabus"><strong>&nbsp;&nbsp;&nbsp;Scheme</strong></h5>
		</div>
		</a>
	   </div>
	    <div class="col-lg-4">
		 <a href="https://drive.google.com/file/d/1nTkFyOhOWTwSt8m2PSXlBMBxUnlcXNhf/view?usp=sharing">
	  <div class="thumbnail">
		<img src="../gif/syllabus.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5 id="ecesyllabus"><strong>&nbsp;&nbsp;&nbsp;Syllabus</strong></h5>
		</div>
		</a>
	   </div>
	  
   </div>
    <br/>
	   <hr/>
<br/>	   
 <h5 style="color:green;margin-bottom:-10px;font-style:italic;"><strong>C PROGRAMMING CODES</strong></h5>
 
     <hr  style="height:1px;border:none;color:#333;background-color:#333;">
		 <div class="row">
	  <div class="col-lg-4">
	  <div class="thumbnail codes">
		<img src="../pictures/coder.png" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;<a href="../Branch/programs.php" >Arrays,</a><a href="../Branch/programs.php" >Linked List,</a>
		<a href="../Branch/programs.php#stack_queue" id="staccck">Stack,</a><a href="../Branch/programs.php#stack_queue" >Queue,</a><a href="../Branch/programs.php#stack_queue" >Recursion</a></strong></h5>
		</div>
	   </div>
	   
	    <div class="col-lg-4">
	  <div class="thumbnail codes">
		<img src="../pictures/coder.png" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>
		<a href="../Branch/programs.php#trees">Trees,</a><a href="../Branch/programs.php#graphs" >Graphs,</a>
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
   
   </div>
  <?php
  include "../includes/footer.php";
  ?>
  </div>
</body>
    <script  src="../cssspin/js/index.js"></script>
</html>