<?php
include "includes/connection_with_database.php";


/*
if(!empty($_SESSION['verification_code']))
{
	 header('location:../login.php');
	
}
*/
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
   <title>KeyNotes</title>
   <meta charset="UTF-8">
   <meta name="description" content="Study Notes,Practical Files and Question papers">
   <meta name="keywords" content="Notes,Files,Physics,Chemistry,Mathematics,B.Tech.,Programming">
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

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       	<script src="js/index.js"></script>
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/index1.css">
  
  
  
  
  <!--FB_LIKE&SHARE_script-->
  <?php
  include "includes/likeshare_script.php";
  ?>
  <!--FB_LIKE&SHARE-->
  
  
  
  
  
  </head>
   
<body>
  <?php
  include "includes/wrapper.php";
  ?>
  <div id="content">
  <!--Navigation bar-->
  <nav class="nav navbar-inverse navbar-absolute-top" style="min-height:70px;">
  
  <div class="container" style="margin-top:10px;">
 
 <div class="navbar-header" style="margin-left:-29px;">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                </button> 
				<img src="pictures/logo2.jpg" style="max-height:60px;max-width:60px;border-style:solid;border-radius:100%;position:relative;right:210px;bottom:5px;"></img><a href="index.php" class="navbar-brand" style="font-size:24px;color:#FF5733;margin-left:15px;">&nbsp;Key Notes</a>
                </div>
	<div class="collapse navbar-collapse" id="myNavbar">
	 <ul class="nav navbar-nav navbar-left" >
	 <li><a href="index.php" style="cursor: pointer; font-size:16px;"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
	 <li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer; font-size:16px;"><span class="glyphicon glyphicon-th-list" ></span>&nbsp;Branch<span class="caret"></span></a>
	<ul class="dropdown-menu">
          <li><a href="Branch/cs.php">Computer Science</a></li>
		  <li><a href="Branch/ece.php">Electrionics & Comm. Engg.</a></li>
		  <li><a href="Branch/mechanical.php">Mechanical Engineering</a></li>
		  <li><a href="Branch/civil.php">Civil Engineering</a></li>
		  <li><a href="Branch/chemical.php">Chemical Engineering</a></li>         
		   <li><a href="Branch/electrical.php">Electrical Engineering</a></li>
        </ul>
	</li>
	
	 <li class="dropdown">
	 <!--MAKE A PAGE OF ALL DSA PROGRAMS LISTED AND THEN USING SAME PAGE LINKS CONNECT THE DIFFERENT LINKS OF DROPDOWN MENU-->
	  <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;font-size:15px;"><i class="fa fa-desktop"></i></span>&nbsp;Scheme & Syllabus<span class="caret"></span></a>
	<ul class="dropdown-menu">
         <li><a href="Branch/cs.php#cssyllabus">Computer Science</a></li>
		  <li><a href="Branch/ece.php#ecesyllabus">Electrionics & Comm. Engg.</a></li>
		  <li><a href="Branch/mechanical.php#mechanicalsyllabus">Mechanical Engineering</a></li>
		  <li><a href="Branch/civil.php#civilsyllabus">Civil Engineering</a></li>
		  <li><a href="Branch/chemical.php#chemicalsyllabus">Chemical Engineering</a></li>  
           <li><a href="Branch/electrical.php#electricalsyllabus">Electrical Engineering</a></li>  		  
        </ul>
	</li>
     
	  <li><a href="Branch/contribute.php" style="cursor: pointer; font-size:16px;"><span class="glyphicon glyphicon-circle-arrow-up"></span>&nbsp;Contribute</a></li>
	</ul>
	
	<ul class="nav navbar-nav navbar-right">
	                    
                        <li><a href="settings.php" style="font-size:15px;"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                        <li><a href="logout.php" style="font-size:15px;"><span class="glyphicon glyphicon-log-in"></span>Log Out</a></li>
	</ul>
  </div>
  
  </div>
</nav>
  
  <!--Navigation bar ends here-->
  
  
    <!--FB_LIKE&SHARE-->
     <?php
	 include "includes/likeshare_button.php";
	 ?>
    <!--FB_LIKE&SHARE-->
  
  
  
  <?php
  if(!isset($_SESSION['email_of_user']))
  include "includes/hr.php";
  ?>
  <?php
  if(isset($_SESSION['email_of_user']))
    {	
     include "includes/fetchname_to_print.php";
	}

  ?>

  <h5><center><strong>Search what you need??We will be very happy to help you</strong></h5>
  </center>
  <hr>
  
   <div class="container-fluid" style="width:95%;">
   <center><h4 style="margin-bottom:0px;margin-top:0px;"><b> <a href="Branch/first_year.php"><div id="foo">B.tech Fresher??Click here</div></h4></a></b></center>
      <hr>
   <h5 style="color:green;margin-bottom:-10px;font-style:italic;"><strong>SELECT YOUR BRANCH</strong></h5>
   <hr  style="height:1px;border:none;color:#333;background-color:#333;">
   <div class="row">
	  <div class="col-lg-4">
	  <a href="Branch/cs.php">
	  <div class="thumbnail">
		<img src="gif/computer.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Computer Science</strong></h5>
		</div>
		</a>
	   </div>
	   
	    <div class="col-lg-4">
	 	  <a href="Branch/ece.php">
	 <div class="thumbnail">
		<img src="gif/electronics3.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Electronics(ECE)</strong></h5>
		</div>
		</a>
	   </div>
	    <div class="col-lg-4">
		 <a href="Branch/chemical.php">
	  <div class="thumbnail">
		<img src="gif/chemical3.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Chemical Engineering</strong></h5>
		</div>
		</a>
	   </div>
   </div>
   <hr/>
   <div class="row">
    <div class="col-lg-4">
	 <a href="Branch/civil.php">
	  <div class="thumbnail">
		<img src="gif/civil1.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;Civil Engineering</strong></h5>
		</div>
		</a>
	   </div>
	    <div class="col-lg-4">
		 <a href="Branch/mechanical.php">
	  <div class="thumbnail">
		<img src="gif/mechanical1.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Mechanical Engineering</strong></h5>
		</div>
		</a>
	   </div>
	    <div class="col-lg-4">
		 <a href="Branch/electrical.php">
	  <div class="thumbnail">
		<img src="gif/electrical.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Electrical Engineering</strong></h5>
		</div>
		</a>
	   </div>
	   
   </div>
   <hr>
    <h5 style="color:green;margin-bottom:-10px;font-style:italic;"><strong>CLASS 12 NOTES</strong></h5>
   <hr  style="height:1px;border:none;color:#333;background-color:#333;">
    <div class="row">
	  <div class="col-lg-4">
	  <a href="https://drive.google.com/file/d/1Wc4mNcDhlV3MYLSmkin0vTmnCFlQu1CO/view?usp=sharing">
	  <div class="thumbnail">
		<img src="gif/physics.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Physics</strong></h5>
		</div>
		</a>
	   </div>
	   
	    <div class="col-lg-4">
	 	  <a href="https://drive.google.com/file/d/1MelcixpPldMPC-DEnaXvuYuGDcIPQhZJ/view?usp=sharing">
	 <div class="thumbnail">
		<img src="gif/electronics3.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Semiconductor</strong></h5>
		</div>
		</a>
	   </div>
	    <div class="col-lg-4">
		 <a href="https://drive.google.com/file/d/10UQx7aNBJMMZaeb_d8YLNK-rxX_ncH7o/view?usp=sharing">
	  <div class="thumbnail">
		<img src="gif/chemical3.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Chemistry</strong></h5>
		</div>
		</a>
	   </div>
   </div>
   <div class="row">
   <div class="col-lg-4">
		 <a href="https://drive.google.com/file/d/1-U_kcqS6s-PZ_y2T_o0kKTregk0p4nXh/view?usp=sharing">
	  <div class="thumbnail">
		<img src="gif/gt.gif" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Mathematics</strong></h5>
		</div>
		</a>
	   </div>
   </div>
   <hr>
   
 <h5 style="color:green;margin-bottom:-10px;font-style:italic;"><strong>C PROGRAMMING CODES</strong></h5>
 
     <hr  style="height:1px;border:none;color:#333;background-color:#333;">
	 <div class="row">
	  <div class="col-lg-4">
	    <div class="thumbnail codes">
		<img src="pictures/coder.png" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;<a href="Branch/programs.php" >Arrays,</a><a href="Branch/programs.php">Linked List,</a>
		<a href="Branch/programs.php#stack_queue" id="staccck">Stack,</a><a href="Branch/programs.php#stack_queue" >Queue,</a><a href="Branch/programs.php#stack_queue" >Recursion</a></strong></h5>
		</div>
		
	   </div>
	  
	    <div class="col-lg-4">
	  <div class="thumbnail codes">
		<img src="pictures/coder.png" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>
		<a href="Branch/programs.php#trees">Trees,</a><a href="Branch/programs.php#graphs" >Graphs,</a>
		<a href="Branch/programs.php#trees" id="staccck">Sorting,</a><a href="Branch/programs.php#graphs" >Searching & Hashing</a></strong></h5>
		</div>
	   </div>
	    <div class="col-lg-4">
	  <div class="thumbnail codes">
		<img src="pictures/coder.png" alt="cannot display" style="border-style:solid;border-color:white;border-radius:80%;border-width:3px;max-width:800%;max-height:80%;"></img>
		<h5><strong>&nbsp;&nbsp;&nbsp;Demo Programs for</strong></h5>
		<h5><a href="Branch/programs.php#demo_t" id="staccck">Trees,</a><a href="Branch/programs.php#demo_g" >Graph,</a><a href="Branch/programs.php#demo_s" >Sorting</a></h5>
		</div>
	   </div>
   </div>
   <hr/>
   
   </div>
   <?php
   include "includes/footer.php";
   ?>
    <script  src="cssspin/js/index.js"></script>
   </div>
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://https-keynotes-tk.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</body>
   
</html>