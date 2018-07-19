<?php
include "includes/connection_with_database.php";
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




if($_FILES["file"]["error"]>0)
{
	$_SESSION['error_in_upload']="Error uploading file";
	header('location:Branch/contribute.php');
	exit();
	
}
								
$file=$_FILES["file"]["name"];

//Validate file format
$file1=explode(".",$file);//It will make an array having the words befor and after . 
$ext=$file1[1];
$allowed=array("pdf","ppt","jpeg","jpg","png","gif","txt","PDF","PPT","JPEG","JPG","GIF","TXT");
if(!in_array($ext,$allowed))
{
	$_SESSION['error_in_upload']="Error uploading file(File format not allowed)";
	header('location:Branch/contribute.php');
	exit();
	
}

$renamed=$_SESSION['email_of_user'].'--NAME--'.$file;
$tmp_name=$_FILES["file"]["tmp_name"];
$path="uploads/".$renamed;




//This will save the file in renamed format
$description=$_POST['description'];
move_uploaded_file($tmp_name,$path);
$email=$_SESSION['email_of_user'];
$add_file="INSERT INTO uploads (email,uploads,description) VALUES ('$email', '$renamed','$description')";
//Count how many files are uploaded by a particular user
$no_of_uploads="update users set No_of_uploads = No_of_uploads+1 WHERE email_id= '$email'";
$run_query=mysqli_query($con,$add_file) or die(mysqli_error($con));
$run_query_update=mysqli_query($con,$no_of_uploads) or die(mysqli_error($con));

//Redirect after succesful uploaded
$_SESSION['upload_success']="Uploading successful.";
header('location:Branch/contribute.php');
?>