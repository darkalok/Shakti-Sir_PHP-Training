<?php
  $u = $_REQUEST['u_name'];
  $p = $_REQUEST['u_pass'];
  if($u == $p){
     session_start();
     $_SESSION['u'] = $u;
     header("location:profile.php");
  }else{
     header("location:index.php?msg= <font color='red'>invalid login</font>");
  }
?>