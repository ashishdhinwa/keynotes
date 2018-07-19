<?php
  $con=mysqli_connect("localhost","root","","keynote") or die(mysqli_error($con));
  $store_session=$_SESSION['email_of_user'];
  $name_query="SELECT name FROM users where email_id='$store_session'";
  $run_name_query=mysqli_query($con,$name_query) or die(mysqli_error($con));
  $name=mysqli_fetch_array($run_name_query);
  ?>
  <center><h3>Welcome <?php echo "$name[0]";?></h3>
