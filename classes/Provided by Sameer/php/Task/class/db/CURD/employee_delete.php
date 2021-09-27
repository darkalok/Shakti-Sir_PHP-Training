<?php
  include("db_connect.php");
  $e_id = $_REQUEST['e_id'];
  $sql = "DELETE FROM emp_info WHERE e_id=$e_id";

  if(mysqli_query($con,$sql)){
     header("location:employee_show.php");
  }else{
     
  }
?>