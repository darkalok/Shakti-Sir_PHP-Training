<?php
  $con = mysqli_connect("localhost","root","","project");
  $user_email  = $_REQUEST['user_email'];
  $sql = "SELECT *FROM user_info WHERE user_email = '$user_email'";
  $rs = mysqli_query($con,$sql);
  if(mysqli_num_rows($rs)){
     echo "<font color='red'> this email already exist !!</font>";
  }else{
     echo "<font color='green'> valid</font>";
  }
?>